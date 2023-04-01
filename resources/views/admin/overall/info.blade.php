@extends('admin.layouts.master')

@section('title','Overall Info')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Overall</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            @include('admin.layouts.partials.errors')

            @include('admin.layouts.partials.success')

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Overall Info</h5>

                    <!-- Horizontal Form -->
                    <form method="POST" action="{{ route('admin.overall.info.update') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Comapny Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" id="name" value="{{ $overall->ove_company_name }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="url" class="col-sm-2 col-form-label">Site URL</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="url" id="url" value="{{ $overall->ove_site_url }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="brand" class="col-sm-2 col-form-label">Brand Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="brand" id="brand" value="{{ $overall->ove_brand_name }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="image" class="col-sm-2 col-form-label">Logo</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" name="image" id="image">
                                <br>
                                @if(!empty($overall->ove_logo_path))
                                    <a href="{{ route('go.seeCustomPicture') }}" >See the current logo</a>
                                @endif
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form><!-- End Horizontal Form -->

                </div>
            </div>
        </div>
    </div>
@endsection
