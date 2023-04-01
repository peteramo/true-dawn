@extends('frontend.layouts.master')

@section('title',$page->meta->met_title)

@section('description',$page->meta->met_description)

@section('keywords',$page->meta->met_keywords)

@section('main')
    @include('frontend.layouts.sections.hero')

    <main id="main">

    </main><!-- End #main -->
@endsection
