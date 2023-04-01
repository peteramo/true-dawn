@extends('admin.layouts.master')

@section('title','Add New Admin')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Add New Admin</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add New Admin</h5>

                    @include('admin.layouts.partials.errors')

                    @include('admin.layouts.partials.success')

                    <!-- Vertical Form -->
                    <form method="POST" action="{{ route('admin.users.store') }}" class="row g-3">
                        @csrf
                        <div class="col-12">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" maxlength="12" class="form-control" id="username" value="{{ old('username') }}">
                        </div>
                        <div class="col-12">
                            <label for="mobile" class="form-label">Mobile</label>
                            <input type="text" name="mobile" class="form-control" id="mobile" value="{{ old('mobile') }}">
                        </div>
                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}">
                        </div>
                        <div class="col-12">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password">
                        </div>
                        <div class="col-12">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" name="status" id="status">
                                <option disabled="disabled"></option>
                                <option value="0">Deactive</option>
                                <option value="1">Active</option>
                            </select>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form><!-- Vertical Form -->

                </div>
            </div>
        </div>
    </div>
@endsection
