<div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="fas fa-plus"></i>
        Legg til rom
    </button>
</div>

@push('modals')
    <x-modal>
        <x-slot name="header">Legg til nytt rom</x-slot>

        <form wire:submit.prevent="store">

        @include('livewire.room._form')

        </form>

        <x-slot name="footer">
            <button type="button" class="btn btn-primary">Legg til</button>
        </x-slot>
    </x-modal>
@endpush
