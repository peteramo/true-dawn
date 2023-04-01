<!DOCTYPE html>
<html lang="en">

    <head>
        @include('admin.layouts.init.head')
    </head>

    <body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        @include('admin.layouts.sections.logo')

        @include('admin.layouts.sections.search')

        @include('admin.layouts.sections.navbar')

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            @include('admin.layouts.sections.sidebar')

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">
        <div class="pagetitle">

            <h1>@yield('pagetitle')</h1>

            @include('admin.layouts.parsers.breadcrumb')

        </div><!-- End Page Title -->

        <section class="section">

            @yield('content')

        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    @include('admin.layouts.init.scripts')
    @include('sweetalert::alert')
    </body>
</html>
