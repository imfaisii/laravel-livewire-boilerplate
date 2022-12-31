@props(['loadingText' => 'Please wait...', 'text' => 'Submit', 'function' => 'submit', 'type' => 'primary'])

<button {{ $attributes->merge(['class' => "btn btn-$type"]) }} type="{{ $function }}">
    <div wire:loading wire:target="{{ $function }}">
        <span>{{ $loadingText }}</span>
        <span class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </span>
    </div>
    <div wire:loading.remove wire:target="{{ $function }}">
        <span>{{ $text }}</span>
    </div>
</button>
