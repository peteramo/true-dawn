<!DOCTYPE html>
<html lang="en">

<head>
  @include('frontend.layouts.init.head')
</head>

<body>

  <!-- ======= Top Bar ======= -->
  @if($set_things->set_header_contact_info == 1)
    @include('frontend.layouts.overall.topbar')
  @endif

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="{{ $over_alls->ove_site_url }}">{{ $over_alls->ove_brand_name }}</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          @include('frontend.layouts.overall.navbar')
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  @yield('main')

  <!-- ======= Footer ======= -->
  @include('frontend.layouts.overall.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  @include('frontend.layouts.init.scripts')

</body>

</html>
