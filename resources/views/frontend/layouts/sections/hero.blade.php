<section id="hero" class="d-flex align-items-center">
    <video autoplay muted loop id="videoBackground" style="position-absolute end-0 bottom-0 h-auto w-auto">
        <source src="{{ !empty($page->home->hom_hero_background_uri) ? asset('storage/'.$page->home->hom_hero_background_uri) : "https://www.w3schools.com/howto/rain.mp4" }}"type="video/mp4">
    </video>
    <div class="container position-absolute" data-aos="fade-up" data-aos-delay="500">
        <h1>{{ $page->home->hom_hero_header ?? '' }}</h1>
        <h2>{{ $page->home->hom_hero_paragraph ?? '' }}</h2>
        @if(!empty($page->home->hom_hero_button_name))
            <a href="{{ $page->home->hom_hero_button_action_uri }}" class="btn-get-started scrollto">{{ $page->home->hom_hero_button_name }}</a>
        @endif
    </div>
</section><!-- End Hero -->
