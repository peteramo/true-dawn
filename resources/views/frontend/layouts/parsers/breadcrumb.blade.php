<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>{{ ucfirst(request()->segment(count(request()->segments()))) }}</li>
        </ol>
        <h2>{{ strtoupper(request()->segment(count(request()->segments()))) }}</h2>
    </div>
</section><!-- End Breadcrumbs -->
