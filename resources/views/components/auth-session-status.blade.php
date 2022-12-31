@props(['status'])

@if ($status)
    @php
        $classes = $status['type'] == 'error' ? ['danger', 'ti-ban'] : ['success', 'ti-check '];
    @endphp

    <div class="alert alert-{{ $classes[0] }} d-flex align-items-center" role="alert">
        <span class="alert-icon text-{{ $classes[0] }} me-2">
            <i class="ti {{ $classes[1] }} ti-xs"></i>
        </span>
        {{ $status['message'] }}
    </div>
@endif
