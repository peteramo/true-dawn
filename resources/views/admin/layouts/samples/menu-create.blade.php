<div class="card">
    <div class="card-body">
        <h5 class="card-title">Make New Menu Item</h5>

        <!-- Horizontal Form -->
        <form method="POST" action="{{ route('admin.menus.create') }}" enctype="multipart/form-data">
            @csrf

            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                </div>
            </div>

            <div class="row mb-3">
                <label for="producer" class="col-sm-2 col-form-label">Link</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="link" id="link" value="{{ old('link') }}">
                </div>
            </div>

            <div class="row mb-3">
                <label for="link" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <select class="form-select" name="status">
                        <option disabled="disabled" selected></option>
                        <option value="0">Deactive</option>
                        <option value="1">Active</option>
                    </select>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </form><!-- End Horizontal Form -->

    </div>
</div>
