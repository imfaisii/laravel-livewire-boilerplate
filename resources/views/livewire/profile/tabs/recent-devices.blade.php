<div class="mb-4 card">
    <h5 class="card-header">Recent Devices</h5>
    <div class="table-responsive">
        <table class="table border-top">
            <thead class="table-light">
                <tr>
                    <th class="text-truncate">Browser</th>
                    <th class="text-truncate">Device</th>
                    <th class="text-truncate">Location</th>
                    <th class="text-truncate">Recent Activities</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @forelse ($recentDevices as $recentDevice)
                    <tr>
                        <td class="text-truncate">
                            <i
                                class="ti ti-brand-{{ $recentDevice['is_mobile'] ? 'mobile' : 'windows' }} text-info me-2 ti-sm"></i>
                            <strong>{{ "{$recentDevice['browser']} on {$recentDevice['platform']}" }}</strong>
                        </td>
                        <td class="text-truncate">{{ $recentDevice['device'] }}</td>
                        <td class="text-truncate">{{ $recentDevice['country'] }}</td>
                        <td class="text-truncate">{{ $recentDevice['login_at'] }}</td>
                    </tr>
                @empty
                    <td class="text-center" colspan="4"></td>
                @endforelse

            </tbody>
        </table>
    </div>
</div>
