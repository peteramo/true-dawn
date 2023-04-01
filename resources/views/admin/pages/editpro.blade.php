@extends('admin.layouts.master')

@section('title','View Page Details')

@section('pagetitle','Projects Page')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.pages.index') }}">All Pages</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.pages.view',3) }}">View Page</a></li>
        <li class="breadcrumb-item active">Edit Project</li>
    </ol>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit Project</h5>

            @include('admin.layouts.partials.errors')

            @include('admin.layouts.partials.success')

            <!-- Horizontal Form -->
            <form method="POST" action="{{ route('admin.pages.projects.update',$project->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <p>
                    <a href="{{ asset('storage/'.$project->pro_image) }}" target="_blank">See the current image of this project</a>
                </p>
                <div class="row mb-3" id="image">
                    <label for="background" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="file" name="image" id="image">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $project->pro_name) }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="duration" class="col-sm-2 col-form-label">Duration</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="duration" id="duration" value="{{ old('duration', $project->pro_duration) }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="director" class="col-sm-2 col-form-label">Director</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="director" id="director" value="{{ old('director', $project->pro_director) }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="writer" class="col-sm-2 col-form-label">Writer</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="writer" id="writer" value="{{ old('title', $project->pro_writer) }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="producer" class="col-sm-2 col-form-label">Producer</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="producer" id="producer" value="{{ old('producer', $project->pro_producer) }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="details" class="col-sm-2 col-form-label">Details</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="details" id="details" value="{{ old('details', $project->pro_details) }}">
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form><!-- End Horizontal Form -->

        </div>
    </div>
@endsection
