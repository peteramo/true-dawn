@extends('frontend.layouts.master')

@section('main')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        @include('frontend.layouts.parsers.breadcrumb')

        <section class="inner-page">
            <div class="container">
                <p>
                    {!! $page->static->sta_body !!}
                </p>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
