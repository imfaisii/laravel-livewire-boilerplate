<div>
    <div class="card">
        <div class="d-flex align-items-center justify-content-between">
            <h5 class="card-header">Roles Table</h5>
            <a href="{{ route('roles.create') }}" class="mt-10 text-white h-50 btn btn-sm btn-primary"
                style="margin-right: 20px;">Create Role
            </a>
        </div>
        <div class="p-3 table-responsive text-nowrap">
            <livewire:tables.permissions.roles-table />
        </div>
    </div>
</div>
