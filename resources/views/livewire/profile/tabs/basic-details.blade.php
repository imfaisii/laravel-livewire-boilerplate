<div class="mb-4 card">
    <h5 class="card-header">Profile Details</h5>
    <!-- Account -->
    <div class="card-body">
        <div class="gap-4 d-flex align-items-start align-items-sm-center">
            <img src="{{ $user->avatar }}" alt="user-avatar" class="rounded d-block w-px-100 h-px-100"
                id="uploadedAvatar" />
            <div class="button-wrapper">
                <label for="upload" class="mb-3 btn btn-primary me-2" tabindex="0">
                    <div class="d-none d-sm-block">
                        <span wire:loading.remove>Upload new photo</span>
                        <span wire:loading wire:target="avatar">Uploading...</span>
                    </div>
                    <i class="ti ti-upload d-block d-sm-none"></i>
                    <input id="upload" type="file" wire:model="avatar" class="account-file-input" hidden
                        accept="image/png, image/jpeg">
                </label>
                @error('avatar')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                <div class="text-muted">Allowed JPG, GIF or PNG. Max size of 800K</div>
            </div>
        </div>
    </div>
    <hr class="my-0" />
    <div class="card-body">
        <form wire:submit.prevent='submit'>
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="form-label">Name</label>
                    <x-lv.input property="name" />
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label">Email Address</label>
                    <x-lv.input property="email" />
                </div>
            </div>
            <div class="mt-2">
                <x-lv.submit-button class="me-sm-3 me-1" loadingText="Updating User..." text="Update Profile"
                    type="primary" />
            </div>
        </form>
    </div>
</div>
