@extends('frontend.layouts.master')

@section('main')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        @include('frontend.layouts.parsers.breadcrumb')

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">

            @foreach($page->project as $project)
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-8">
                        <div class="header-pro">
                            <h1>{{ $project->pro_name }}</h1>
                        </div>
                        <br>
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/'.$project->pro_image) }}" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        @if(!empty($project->pro_director) OR !empty($project->pro_writer) OR !empty($project->pro_producer) OR !empty($project->pro_duration))
                        <div class="portfolio-info">
                            <h3>Project information</h3>
                            <ul>
                                @if(!empty($project->pro_director)) <li><strong>Director</strong>: {{ $project->pro_director }}</li> @endif
                                @if(!empty($project->pro_writer)) <li><strong>Writer</strong>: {{ $project->pro_writer }}</li> @endif
                                @if(!empty($project->pro_producer)) <li><strong>Producer</strong>: {{ $project->pro_producer }}</li> @endif
                                @if(!empty($project->pro_duration)) <li><strong>Duration</strong>: {{ $project->pro_duration }}</li> @endif
                            </ul>
                        </div>
                        @endif
                        @if(!empty($project->pro_details))
                        <div class="portfolio-description">
                            <h2>Details</h2>
                            <p>
                                {{ $project->pro_details }}
                            </p>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach

        </section><!-- End Portfolio Details Section -->
    </main><!-- End #main -->
@endsection
