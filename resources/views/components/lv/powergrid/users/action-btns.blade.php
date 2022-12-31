<div>
    <button wire:ignore wire:click='delete({{ $id }})' type="button" class="w-0 btn btn-sm btn-danger"
        data-toggle="tooltip" title="Remove">
        <i class="fa fa-trash-alt"></i>
    </button>
    <a href="{{ route('users.edit', ['user' => $id]) }}" class="w-0 btn btn-sm btn-info" data-toggle="tooltip"
        title="Edit">
        <i class="fa fa-edit"></i>
    </a>
</div>
