<form method="POST" action="{{ route('admin.pages.contactus.update') }}">
    @csrf

    <div class="row mb-3">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" name="email" id="email" value="{{ old('email', $page->contact->con_email) }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="email2" class="col-sm-2 col-form-label">Secondary Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" name="email2" id="email2" value="{{ old('email2', $page->contact->con_email2) }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="phone" class="col-sm-2 col-form-label">Phone Number</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone', $page->contact->con_phone) }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="phone2" class="col-sm-2 col-form-label">Secondary Phone Number</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="phone2" id="phone2" value="{{ old('phone2', $page->contact->con_phone2) }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="duration" class="col-sm-2 col-form-label">Mobile Number</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="mobile" id="mobile" value="{{ old('mobile', $page->contact->con_mobile) }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="duration" class="col-sm-2 col-form-label">Fax</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="fax" id="fax" value="{{ old('fax', $page->contact->con_fax) }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="duration" class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="address" id="address" value="{{ old('address', $page->contact->con_address) }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="postcode" class="col-sm-2 col-form-label">Postal Code</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="postcode" id="postcode" value="{{ old('postcode', $page->contact->con_postcode) }}">
        </div>
    </div>

    <hr>

    <div class="row mb-3">
        <label for="email" class="col-sm-2 col-form-label">Facebook</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="facebook" id="facebook" value="{{ old('facebook', $page->contact->con_facebook) }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="twitter" class="col-sm-2 col-form-label">Twitter</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="twitter" id="twitter" value="{{ old('twitter', $page->contact->con_twitter) }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="instagram" id="instagram" value="{{ old('instagram', $page->contact->con_instagram) }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="skype" class="col-sm-2 col-form-label">Skype</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="skype" id="skype" value="{{ old('skype', $page->contact->con_skype) }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="linkedin" class="col-sm-2 col-form-label">Linkedin</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="linkedin" id="linkedin" value="{{ old('linkedin', $page->contact->con_linkedin) }}">
        </div>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
</form><!-- End Horizontal Form -->
