<div class="row">
    <div class="col-md-12">
        <ul class="mb-4 nav nav-pills flex-column flex-md-row">
            <li class="nav-item">
                <a wire:click="$set('tab', 'profile')" href="javascript:void(0);" @class(['nav-link', 'active' => $tab == 'profile'])>
                    <i class="ti-xs ti ti-users me-1"></i> Account</a>
            </li>
            <li class="nav-item">
                <a wire:click="$set('tab', 'security')" href="javascript:void(0);" @class(['nav-link', 'active' => $tab == 'security'])>
                    <i class="ti-xs ti ti-lock me-1"></i> Security
                </a>
            </li>
            <li class="nav-item">
                <a wire:click="$set('tab', 'billing')" href="javascript:void(0);" @class(['nav-link', 'active' => $tab == 'billing'])>
                    <i class="ti-xs ti ti-file-description me-1"></i> Billing & Plans
                </a>
            </li>
            <li class="nav-item">
                <a wire:click="$set('tab', 'notifications')" href="javascript:void(0);" @class(['nav-link', 'active' => $tab == 'notifications'])>
                    <i class="ti-xs ti ti-bell me-1"></i> Notifications
                </a>
            </li>
            <li class="nav-item">
                <a wire:click="$set('tab', 'connections')" href="javascript:void(0);" @class(['nav-link', 'active' => $tab == 'connections'])>
                    <i class="ti-xs ti ti-link me-1"></i> Connections
                </a>
            </li>
        </ul>

        @if ($tab == 'profile')
            <livewire:profile.tabs.basic-details />

            <livewire:profile.tabs.deactivate-account />
        @elseif($tab == 'security')
            <livewire:profile.tabs.change-password />

            <livewire:profile.tabs.two-steps-verification />

            <livewire:profile.tabs.recent-devices />
        @elseif($tab == 'billing')

        @elseif($tab == 'notifications')

        @elseif($tab == 'connections')
        @endif
    </div>
</div>
