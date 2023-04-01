@extends('admin.layouts.master')

@section('title','Pages Management')

@section('pagetitle','Home Page')

@section('content')
    @include('admin.layouts.partials.errors')

    @include('admin.layouts.partials.success')

    <div class="row">
        <div class="col-12">
            @include('admin.layouts.samples.hero-info')
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            @include('admin.layouts.samples.meta-info')
        </div>
    </div>
@endsection
