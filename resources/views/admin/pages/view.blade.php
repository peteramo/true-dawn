@extends('admin.layouts.master')

@section('title','View Page Details')

@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.pages.index') }}">All Pages</a></li>
    <li class="breadcrumb-item active">View Page</li>
</ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">View Page Info</h5>

                    @if($page->id == 1)
                        @include('admin.pages.homepage')
                    @elseif($page->id == 2)
                        @include('admin.pages.services')
                    @elseif($page->id == 3)
                        @include('admin.pages.projects')
                    @elseif($page->id == 4)
                        @include('admin.pages.aboutus')
                    @elseif($page->id == 5)
                        @include('admin.pages.contactus')
                    @else
                        @include('admin.layouts.partials.notfound')
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
