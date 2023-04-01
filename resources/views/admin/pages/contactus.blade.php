@extends('admin.layouts.master')

@section('title','Contact Management')

@section('pagetitle','Contactus Page')

@section('content')
    @include('admin.layouts.partials.errors')

    @include('admin.layouts.partials.success')

    <div class="row">
        <div class="col-12">
            @include('admin.layouts.samples.contact-details')
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-12">
            @include('admin.layouts.samples.meta-info')
        </div>
    </div>
@endsection
