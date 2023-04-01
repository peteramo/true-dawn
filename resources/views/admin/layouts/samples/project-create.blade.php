<div class="card">
    <div class="card-body">
        <h5 class="card-title">Make New Project</h5>

        <!-- Horizontal Form -->
        <form method="POST" action="{{ route('admin.pages.projects.create') }}" enctype="multipart/form-data">
            @csrf

            <div class="row mb-3">
                <label for="image" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" name="image" id="image">
                </div>
            </div>
            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="duration" class="col-sm-2 col-form-label">Duration</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="duration" id="duration" value="{{ old('duration') }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="director" class="col-sm-2 col-form-label">Director</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="director" id="director" value="{{ old('director') }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="writer" class="col-sm-2 col-form-label">Writer</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="writer" id="writer" value="{{ old('title') }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="producer" class="col-sm-2 col-form-label">Producer</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="producer" id="producer" value="{{ old('producer') }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="details" class="col-sm-2 col-form-label">Details</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="details" id="details" value="{{ old('details') }}">
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </form><!-- End Horizontal Form -->

    </div>
</div>
