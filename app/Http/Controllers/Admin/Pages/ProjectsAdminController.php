<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Controller;
use App\Models\Pages\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProjectsAdminController extends AdminController
{
    public function createPro(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'name' => 'required',
            'duration' => 'nullable',
            'director' => 'nullable',
            'writer' => 'nullable',
            'producer' => 'nullable',
            'details' => 'nullable',
        ]);

        $path = NULL;
        if($request->has('image')){
           $path = $this->uploadFile($request->file('image'),"projects");
        }

        Project::create([
            'pro_page_id' => 3,
            'pro_image' => !empty($path) ? $path : NULL,
            'pro_name' => $request->name,
            'pro_duration' => $request->duration,
            'pro_director' => $request->director,
            'pro_writer' => $request->writer,
            'pro_producer' => $request->producer,
            'pro_details' => $request->details,
        ]);

        return redirect()->back()->withSuccess('New project is added');
    }

    public function deletePro($id)
    {
        $project = Project::find($id);
        $project->delete();

        return redirect()->back()->withSuccess('Project deleted');
    }

    public function editPro($id)
    {
        $project = Project::find($id);
        return view('admin.pages.editpro', compact('project'));
    }

    public function updatePro(Request $request, $id)
    {
        $project = Project::find($id);

        $path = NULL;
        if($request->has('image')){
            $path = $this->uploadFile($request->file('image'),"projects");
        }else{
            $path = $project->pro_image;
        }

        $project->pro_name = $request->name;
        $project->pro_image = $path;
        $project->pro_duration = $request->duration;
        $project->pro_director = $request->director;
        $project->pro_writer = $request->writer;
        $project->pro_producer = $request->producer;
        $project->pro_details = $request->details;
        $project->save();

        return redirect()->back()->withSuccess('Project edited successfully');
    }
}
