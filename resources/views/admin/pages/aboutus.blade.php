@extends('admin.layouts.master')

@section('title','Pages Management')

@section('pagetitle','Aboutus Page')

@section('content')
    @include('admin.layouts.partials.errors')

    @include('admin.layouts.partials.success')

    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{ route('admin.pages.aboutus.update') }}">
                @csrf

                <div class="row mb-3">
                    <div class="col-sm-12">
                        <textarea rows="5" type="text" class="form-control" name="body" id="body" placeholder="Enter the body of this page">{{ $page->static->sta_body ?? '' }}</textarea>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form><!-- End Horizontal Form -->
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-12">
            @include('admin.layouts.samples.meta-info')
        </div>
    </div>
@endsection

@section('scripts')
    <script src="/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('body',{
            filebrowserUploadUrl: '/admin/upload-image',
            filebrowserImageUploadUrl:'/admin/upload-image'
        });
    </script>
@endsection
