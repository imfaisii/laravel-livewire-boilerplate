<div>
    <!-- Multi Column with Form Separator -->
    <div class="mb-4 card">
        <h5 class="card-header">Update User</h5>
        <form class="card-body" wire:submit.prevent='submit'>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">User Name</label>
                    <x-lv.input property="name" placeholder="John Doe" />
                </div>

                <div class="col-md-6">
                    <label class="form-label">Email Address</label>
                    <x-lv.input property="email" placeholder="abc@example.com" />
                </div>

                <div class="col-md-6">
                    <label class="form-label">Password</label>
                    <x-lv.input property="password" type="password" placeholder="******" />
                </div>

                <div class="col-md-6">
                    <label class="form-label">Confirm Password</label>
                    <x-lv.input property="password_confirmation" placeholder="******" />
                </div>

                <h6 class="mt-5">Roles</h6>

                @forelse ($roles as $role)
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" wire:model="selectedRoles"
                                value="{{ $role->id }}" />
                            <label class="form-check-label"> {{ $role->name }} </label>
                        </div>
                    </div>
                @empty
                    <p>No role(s) found.</p>
                @endforelse

            </div>
            <div class="pt-4">
                <x-lv.submit-button class="me-sm-3 me-1" loadingText="Updating..." text="Submit" type="primary" />

                <button type="reset" class="btn btn-label-secondary">Cancel</button>
            </div>
        </form>
    </div>
</div>
