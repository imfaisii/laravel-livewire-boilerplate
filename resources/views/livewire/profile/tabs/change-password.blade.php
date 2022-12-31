<div class="mb-4 card">
    <h5 class="card-header">Change Password</h5>
    <div class="card-body">
        <form wire:submit.prevent='submit'>
            <div class="row">
                <div class="mb-3 col-md-6 form-password-toggle">
                    <label class="form-label">Current Password</label>
                    <div class="input-group input-group-merge">
                        <input wire:model.lazy='current_password'
                            class="form-control @error('current_password') is-invalid @enderror" type="text"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                        @error('current_password')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-6 form-password-toggle">
                    <label class="form-label">New Password</label>
                    <div class="input-group input-group-merge">
                        <input wire:model.lazy='password' class="form-control @error('password') is-invalid @enderror"
                            type="text"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                        @error('password')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <div class="mb-3 col-md-6 form-password-toggle">
                    <label class="form-label" for="confirmPassword">Confirm New Password</label>
                    <div class="input-group input-group-merge">
                        <input wire:model.lazy='password_confirmation'
                            class="form-control @error('password_confirmation') is-invalid @enderror" type="text"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                        @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-4 col-12">
                    <h6>Password Requirements:</h6>
                    <ul class="mb-0 ps-3">
                        <li class="mb-1">Minimum 8 characters long - the more, the better</li>
                        <li class="mb-1">At least one lowercase character</li>
                        <li>At least one number, symbol, or whitespace character</li>
                    </ul>
                </div>
                <div>
                    <x-lv.submit-button loadingText="Saving Password..." text="Change Password" type="primary" />
                    <button type="reset" class="btn btn-label-secondary">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>
