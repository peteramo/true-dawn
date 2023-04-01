<div class="card">
    <div class="card-body">
        <h5 class="card-title">Change Password</h5>
            <form method="POST" action="{{ route('admin.account.change.pass') }}" class="row g-3">
                @csrf

                <div class="col-12">
                    <label for="password" class="form-label">Current Password</label>
                    <input type="password" name="password" maxlength="12" class="form-control" id="password" value="{{ old('password') }}">
                </div>
                <div class="col-12">
                    <label for="new_password" class="form-label">New Password</label>
                    <input type="password" name="new_password" class="form-control" id="new_password" value="{{ old('new_password') }}">
                </div>
                <div class="col-12">
                    <label for="confirm_new_password" class="form-label">Confirm New Password</label>
                    <input type="password" name="confirm_new_password" class="form-control" id="confirm_new_password" value="{{ old('confirm_new_password') }}">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form><!-- Vertical Form -->
    </div>
</div>
