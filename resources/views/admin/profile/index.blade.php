@extends('admin.layouts.master')

@section('title','Your Profile')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Your Profile</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Your Profile Info</h5>

                    @include('admin.layouts.partials.errors')

                    @include('admin.layouts.partials.success')

                    <h6>Created at:</h6>
                    {!! auth()->user()->created_at ?? '<i>Your account was created by seeders!</i>' !!}
                    <br><br>

                    <h6>Updated at:</h6>
                    {!! auth()->user()->updated_at ?? '<i>Your account was created by seeders!</i>' !!}
                    <br><br>

                    <h6>Last login at:</h6>
                    {{ auth()->user()->usr_last_login ?? '' }}
                </div>
            </div>
        </div>
    </div>
@endsection
