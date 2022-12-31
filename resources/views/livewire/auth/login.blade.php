<div>
    <h4 class="pt-2 mb-1">Welcome to {{ config('app.name') }}! 👋</h4>
    <p class="mb-4">Please sign-in to your account.</p>

    <x-auth-session-status :status="session('status')" />

    <form class="mb-3" wire:submit.prevent='login'>
        <div class="mb-3">
            <label for="email" class="form-label">Email or Username</label>
            <x-lv.input property="email" placeholder="Enter your email or username" />
        </div>
        <div class="mb-3 form-password-toggle">
            <div class="d-flex justify-content-between">
                <label class="form-label" for="password">Password</label>
                <a href="#">
                    <small>Forgot Password?</small>
                </a>
            </div>
            <div class="input-group input-group-merge">
                <input wire:model.lazy="password" type="password" id="password"
                    class="form-control @error('password') is-invalid @enderror" name="password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password" />
                <span class="cursor-pointer input-group-text"><i class="ti ti-eye-off"></i></span>
                @error('password')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember-me" />
                <label class="form-check-label" for="remember-me"> Remember Me </label>
            </div>
        </div>
        <div class="mb-3">
            <x-lv.submit-button class="d-grid w-100" loadingText="Signing In" text="Create Account" type="primary" function="login" />
        </div>
    </form>

    <p class="text-center">
        <span>New on our platform?</span>
        <a href="#">
            <span>Create an account</span>
        </a>
    </p>

    <div class="my-4 divider">
        <div class="divider-text">or</div>
    </div>

    <div class="d-flex justify-content-center">
        <a href="javascript:;" class="btn btn-icon btn-label-facebook me-3">
            <i class="tf-icons fa-brands fa-facebook-f fs-5"></i>
        </a>

        <a href="javascript:;" class="btn btn-icon btn-label-google-plus me-3">
            <i class="tf-icons fa-brands fa-google fs-5"></i>
        </a>

        <a href="javascript:;" class="btn btn-icon btn-label-twitter">
            <i class="tf-icons fa-brands fa-twitter fs-5"></i>
        </a>
    </div>
</div>
