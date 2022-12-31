<div>
    <div class="card">
        <div class="d-flex align-items-center justify-content-between">
            <h5 class="card-header">Users Table</h5>
            <a href="{{ route('users.create') }}" class="mt-10 text-white h-50 btn btn-sm btn-primary"
                style="margin-right: 20px;">Create User
            </a>
        </div>
        <div class="p-3 table-responsive text-nowrap">
            <livewire:tables.permissions.users-table />
        </div>
    </div>
</div>
