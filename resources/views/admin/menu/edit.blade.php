@extends('admin.layouts.master')

@section('title','Edit Menu Item')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.menus.index') }}">Menu</a></li>
        <li class="breadcrumb-item active">Edit Menu</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Menu Item</h5>

                    @include('admin.layouts.partials.errors')

                    @include('admin.layouts.partials.success')

                <!-- Vertical Form -->
                    <form method="POST" action="{{ route('admin.menus.update', $item->id) }}" class="row g-3">
                        @csrf
                        @method('PATCH')

                        <div class="col-12">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" maxlength="10" class="form-control" id="name" value="{{ old('name', $item->men_name) }}">
                        </div>

                        <div class="col-12">
                            <label for="link" class="form-label">Link</label>
                            <input type="text" name="link" class="form-control" id="link" value="{{ old('link', $item->men_link) }}">
                        </div>

                        <div class="col-12">
                            <label for="link" class="form-label">Status</label>
                            <select class="form-select" name="status">
                                <option value="0" @if($item->men_active == 0) selected @endif>Deactive</option>
                                <option value="1" @if($item->men_active == 1) selected @endif>Active</option>
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
