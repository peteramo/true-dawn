@extends('admin.layouts.master')

@section('title','Footer Info')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Footer Info</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Footer Links</h5>

                    @include('admin.layouts.partials.errors')

                    @include('admin.layouts.partials.success')

                    <!-- Vertical Form -->
                    <form method="POST" action="{{ route('admin.footer.info.update') }}" class="row g-3">
                        @csrf

                        <div class="row">
                            <div class="col-6">
                                <label for="name1" class="form-label">Name 1</label>
                                <input type="text" name="name1" class="form-control" id="name1" value="{{ old('name1',$footer->foo_name_1) }}">
                            </div>
                            <div class="col-6">
                                <label for="link1" class="form-label">Link 1</label>
                                <input type="text" name="link1" class="form-control" id="link1" value="{{ old('link1',$footer->foo_link_1) }}">
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-6">
                                <label for="name2" class="form-label">Name 2</label>
                                <input type="text" name="name2" class="form-control" id="name2" value="{{ old('name2',$footer->foo_name_2) }}">
                            </div>
                            <div class="col-6">
                                <label for="link2" class="form-label">Link 2</label>
                                <input type="text" name="link2" class="form-control" id="link2" value="{{ old('link2',$footer->foo_link_2) }}">
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-6">
                                <label for="name3" class="form-label">Name 3</label>
                                <input type="text" name="name3" class="form-control" id="name3" value="{{ old('name3',$footer->foo_name_3) }}">
                            </div>
                            <div class="col-6">
                                <label for="link3" class="form-label">Link 3</label>
                                <input type="text" name="link3" class="form-control" id="link3" value="{{ old('link3',$footer->foo_link_3) }}">
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-6">
                                <label for="name4" class="form-label">Name 4</label>
                                <input type="text" name="name4" class="form-control" id="name4" value="{{ old('name4',$footer->foo_name_4) }}">
                            </div>
                            <div class="col-6">
                                <label for="link4" class="form-label">Link 4</label>
                                <input type="text" name="link4" class="form-control" id="link4" value="{{ old('link4',$footer->foo_link_4) }}">
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-6">
                                <label for="name5" class="form-label">Name 5</label>
                                <input type="text" name="name5" class="form-control" id="name5" value="{{ old('name5',$footer->foo_name_5) }}">
                            </div>
                            <div class="col-6">
                                <label for="link5" class="form-label">Link 5</label>
                                <input type="text" name="link5" class="form-control" id="link5" value="{{ old('link5',$footer->foo_link_5) }}">
                            </div>
                        </div><br>

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
