@extends('admin.layouts.master')

@section('title','Account Settings')

@section('pagetitle','Account Settings')

@section('content')
    @include('admin.layouts.partials.errors')

    @include('admin.layouts.partials.success')

    <div class="row">
        <div class="col-12">
            @include('admin.layouts.samples.account-info')
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-12">
            @include('admin.layouts.samples.change-pass')
        </div>
    </div>
@endsection
