<div>
    <form wire:submit.prevent="submit">
        <x-slot name="header">Legg til nytt rom</x-slot>

        @include('livewire.room._form')

        <x-slot name="footer">
            <button type="button" class="btn btn-primary">Legg til</button>
        </x-slot>
    </form>
</div>
