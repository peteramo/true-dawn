@extends('admin.layouts.master')

@section('title','Menu Items')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Menu</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            @include('admin.layouts.partials.success')

            @include('admin.layouts.samples.menu-items')
        </div>
        <div class="col-lg-12">
            @include('admin.layouts.samples.menu-create')
        </div>
    </div>
@endsection
