<div class="card">
    <div class="card-body">
        <h5 class="card-title">Meta Info</h5>

        <!-- Horizontal Form -->
        <form method="POST" action="{{ route('admin.pages.store') }}">
            @csrf

            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="description" id="description" value="{{ old('title') }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="keywords" class="col-sm-2 col-form-label">Keywords (Separate each tag by ,)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="keywords" id="keywords" value="{{ old('title') }}">
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </form><!-- End Horizontal Form -->

    </div>
</div>
