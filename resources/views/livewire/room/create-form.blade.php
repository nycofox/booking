<div>
{{--    <form wire:submit.prevent="submit">--}}
        <x-slot name="header">Legg til nytt rom</x-slot>

        @include('livewire.room._form')

        <x-slot name="footer">
            <button class="btn btn-primary" wire:click="addRoom">Legg til</button>
        </x-slot>
{{--    </form>--}}
</div>
