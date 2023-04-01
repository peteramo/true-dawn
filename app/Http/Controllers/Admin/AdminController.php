<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notifications;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function uploadFile($f,$d)
    {
        $file = $f;

        $fileExtension = $file->getClientOriginalExtension();

        $fileMimeType = $file->getMimeType();

        $afterDiskRoot = "/uploads/$d";

        $fileName = 'pro'.$file->getClientOriginalName();

        $filePath = storage_path('app/public'.$afterDiskRoot.'/'.$fileName);
        if(File::exists($filePath)){
            $fileName = time() . '_' . $fileName;
        }

        $upload = $file->storeAs($afterDiskRoot,$fileName,'public');

        $uploadData = [
            'name' => $fileName,
            'path' => $upload,
            'mime_type' => $fileMimeType,
            'extension' => $fileExtension
        ];

//        if(!File::exists(storage_path('/app/public/uploads/projects/'.$uploadData['name']))){
//            return redirect()->back()->withErrors(['errors'=>'The file not uploaded properly!']);
//        }

        return $uploadData['path'];
    }

    public function uploadImage()
    {
        $this->validate(\request(),[
            'upload' => 'required|mimes:jpeg,png,bmp'
        ]);

        $year = Carbon::now()->year;
        $imagePath = "/uploads/static/";

        $file = request()->file('upload');
        $filename = $file->getClientOriginalName();

        $file->move(public_path($imagePath), $filename);
        $url = $imagePath . $filename;

        return "<script>window.parent.CKEDITOR.tools.callFunction(1,'{$url}','')</script>";
    }

    public function markAsRead($id)
    {
        $notif = Notifications::find($id);
        $notif->not_show = 1;
        $notif->save();

        return redirect()->back();
    }
}
