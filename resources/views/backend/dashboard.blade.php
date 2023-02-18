<x-backend-layout>
    <div class="row">

        <x-tile>
            <x-card>
                <x-slot name="header">
                    Mine kandidater
                </x-slot>
            </x-card>
        </x-tile>

        <x-tile>
            <x-card>
                @livewire('user.search-user')
            </x-card>
        </x-tile>

        <x-tile>
            <x-card>
                <x-slot name="header">
                    Instillinger
                </x-slot>

                <ul>
                    <li><a href="{{ route('rooms.index') }}">Rom</a></li>
                </ul>
            </x-card>
        </x-tile>

    </div>
</x-backend-layout>
