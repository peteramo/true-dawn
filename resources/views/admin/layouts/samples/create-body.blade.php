<div class="row">
    <div class="col-12">
        <form method="POST" action="{{ route('admin.pages.store') }}">
            @csrf

            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                </div>
            </div>

            <div class="row mb-3">
                <label for="uri" class="col-sm-2 col-form-label">URI</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="uri" id="uri" value="{{ old('uri') }}">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12">
                    <textarea rows="5" type="text" class="form-control" name="body" id="body" placeholder="Enter the body of this page"></textarea>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </form><!-- End Horizontal Form -->
    </div>
</div>
