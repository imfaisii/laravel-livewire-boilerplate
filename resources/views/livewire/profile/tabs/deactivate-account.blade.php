<div>
    <div class="card">
        <h5 class="card-header">Delete Account</h5>
        <div class="card-body">
            <div class="mb-0 mb-3 col-12">
                <div class="alert alert-warning">
                    <h5 class="mb-1 alert-heading">Are you sure you want to delete your account?</h5>
                    <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                </div>
            </div>
            <form wire:submit.prevent='submit'>
                <div class="mb-4 form-check">
                    <input wire:model.lazy='check' class="form-check-input" type="checkbox" />
                    <label class="form-check-label">I confirm my account deactivation</label>
                    @error('check')
                        <div class="text-sm text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <x-lv.submit-button class="me-sm-3 me-1" loadingText="Deactivating account... "
                    text="Deactivate Account" type="danger" />
            </form>
        </div>
    </div>
</div>
