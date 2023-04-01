@extends('admin.layouts.master')

@section('title','Settings Info')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Settings</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            @include('admin.layouts.partials.errors')

            @include('admin.layouts.partials.success')

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Settings Info</h5>

                    <!-- Horizontal Form -->
                    <form method="POST" action="{{ route('admin.settings.info.update') }}">
                        @csrf

                        <div class="col-12">
                            <label for="link" class="form-label">Show contact info at header top navbar</label>
                            <select class="form-select" name="connection">
                                <option value="1" @if($setting->set_header_contact_info == 1) selected @endif>Show</option>
                                <option value="0" @if($setting->set_header_contact_info == 0) selected @endif>Do not show</option>
                            </select>
                        </div>

                        </br>

                        <div class="col-12">
                            <label for="link" class="form-label">Show subscription news letter at bottom footer</label>
                            <select class="form-select" name="subscription">
                                <option value="1" @if($setting->set_news_letter_subscription == 1) selected @endif>Show</option>
                                <option value="0" @if($setting->set_news_letter_subscription == 0) selected @endif>Do not show</option>
                            </select>
                        </div>

                        </br>

                        <div class="col-12">
                            <label for="link" class="form-label">Show developer credits at bottom footer</label>
                            <select class="form-select" name="credentials">
                                <option value="1" @if($setting->set_credits_footer_info == 1) selected @endif>Show</option>
                                <option value="0" @if($setting->set_credits_footer_info == 0) selected @endif>Do not show</option>
                            </select>
                        </div>

                        </br>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form><!-- End Horizontal Form -->

                </div>
            </div>
        </div>
    </div>
@endsection
