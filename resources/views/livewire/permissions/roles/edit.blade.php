<div>
    <!-- Multi Column with Form Separator -->
    <div class="mb-4 card">
        <h5 class="card-header">Edit Role</h5>
        <form class="card-body" wire:submit.prevent='submit'>
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label">Role Name</label>
                    <x-lv.input property="name" placeholder="Developer" />
                </div>

                <h6 class="mt-5">Permissions</h6>

                @forelse ($permissions as $permission)
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" wire:model="selectedPermissions"
                                value="{{ $permission->id }}" />
                            <label class="form-check-label"> {{ $permission->name }} </label>
                        </div>
                    </div>
                @empty
                    <p>No permission found.</p>
                @endforelse

            </div>
            <div class="pt-4">
                <x-lv.submit-button class="me-sm-3 me-1" loadingText="Updating Role..." text="Submit" type="primary" />

                <button type="reset" class="btn btn-label-secondary">Cancel</button>
            </div>
        </form>
    </div>
</div>
