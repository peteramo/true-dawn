@extends('admin.layouts.master')

@section('title','Create Page')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Add New Page</li>
    </ol>
@endsection

@section('content')
    @include('admin.layouts.partials.errors')

    @include('admin.layouts.partials.success')

    @include('admin.layouts.samples.create-body')
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
