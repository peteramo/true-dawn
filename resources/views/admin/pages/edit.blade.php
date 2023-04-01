@extends('admin.layouts.master')

@section('title','Edit Page')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="{{ route('admin.pages.index') }}">All Pages</a></li>
        <li class="breadcrumb-item">Edit Page</li>
    </ol>
@endsection

@section('content')
    @include('admin.layouts.partials.errors')

    @include('admin.layouts.partials.success')

    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{ route('admin.pages.update',$page->id) }}">
                @csrf
                @method('PATCH')

                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $page->pag_name) }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="uri" class="col-sm-2 col-form-label">URI</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="uri" id="uri" value="{{ old('uri', $page->pag_uri) }}">
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
