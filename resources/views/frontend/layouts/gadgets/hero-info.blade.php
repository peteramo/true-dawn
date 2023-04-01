@section('script')
	<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endsection


<div class="card">
    <div class="card-body">
        <h5 class="card-title">Hero Info</h5>

        <!-- Horizontal Form -->
        <form method="POST" action="{{ route('admin.pages.home.updateHero', $page->id) }}" enctype="multipart/form-data">
            @csrf

            @if(!empty($page->home->hom_hero_background_uri))
                <a href="{{ route('go.seeHeroBackground') }}">See the current hero background</a>
                <br><br>
            @endif
			
			<div x-data="{ show:false }">
				<div class="row mb-3">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="changeBackground" name="change_background" x-model="show">
						<label class="form-check-label" for="changeBackground">
							Change Background
						</label>
					</div>
				</div>

				<div class="row mb-3" id="backgroundUpload" x-show="show">
					<label for="background" class="col-sm-2 col-form-label">Background File</label>
					<div class="col-sm-10">
						<input class="form-control" type="file" name="background" id="background">
					</div>
				</div>
			</div>
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" id="title" value="{{ old('title',$page->home->hom_hero_header) }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="description" id="description" value="{{ old('desciption',$page->home->hom_hero_paragraph) }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="button_name" class="col-sm-2 col-form-label">Button Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="button_name" id="button_name" value="{{ old('button_name',$page->home->hom_hero_button_name) }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="button_uri" class="col-sm-2 col-form-label">Button URI</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="button_uri" id="button_uri" value="{{ old('button_uri',$page->home->hom_hero_button_action_uri) }}">
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </form><!-- End Horizontal Form -->

    </div>
</div>

