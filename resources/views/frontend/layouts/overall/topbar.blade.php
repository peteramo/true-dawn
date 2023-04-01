<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope-fill"></i><a href="mailto:{{ $con_facts->con_email ?? '' }}">{{ $con_facts->con_email ?? '' }}</a>
            @if(!empty($con_facts->con_mobile))<i class="bi bi-phone-fill phone-icon"></i> {{ $con_facts->con_mobile ?? '' }}@endif
        </div>
        <div class="social-links d-none d-md-block">
            <a href="{{ $con_facts->con_twitter ?? '' }}" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="{{ $con_facts->con_facebook ?? '' }}" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="{{ $con_facts->con_instagram ?? '' }}" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="{{ $con_facts->con_linkedin ?? '' }}" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        </div>
    </div>
</section>
