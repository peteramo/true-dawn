<form method="POST" action="{{ route('admin.account.change.pass') }}" class="row g-3">
    @csrf

    <div class="col-12">
        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" maxlength="12" class="form-control" id="username" value="{{ old('username',$user->usr_user_name) }}">
    </div>
    <div class="col-12">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="email" value="{{ old('email',$user->usr_email_address) }}">
    </div>
    <div class="col-12">
        <label for="mobile" class="form-label">Mobile</label>
        <input type="text" name="mobile" class="form-control" id="mobile" value="{{ old('mobile',$user->usr_mobile_phone) }}">
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
</form><!-- Vertical Form -->
