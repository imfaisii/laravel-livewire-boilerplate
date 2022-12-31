@props(['property'])

<input class="form-control @error($property) is-invalid @enderror" wire:model.lazy="{{ $property }}"
    wire:loading.attr='disabled' wire:target='{{ $property }}' {!! $attributes !!}>

@error($property)
    <span class="invalid-feedback" role="alert">{{ $message }}</span>
@enderror
