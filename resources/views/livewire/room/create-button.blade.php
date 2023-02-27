<div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="fas fa-plus"></i>
        Legg til rom
    </button>
</div>

@push('modals')
    <x-modal>
        <form wire:submit.prevent="submit">
            <x-slot name="header">Legg til nytt rom</x-slot>

            @include('livewire.room._form')

            <x-slot name="footer">
                <button type="button" class="btn btn-primary">Legg til</button>
            </x-slot>
        </form>
    </x-modal>
@endpush
