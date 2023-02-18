<x-app-layout>
    <h3>Velkommen {{ auth()->user()->first_name }}</h3>

    <div class="row">
        <x-tile>
            <x-card>
                <x-slot name="header">
                    Kommende reservasjoner
                </x-slot>

                Ellers ja...
            </x-card>
        </x-tile>

        {{--        <x-tile>--}}
        {{--            <x-card>--}}
        {{--                <x-slot name="header">--}}
        {{--                Mine favorittseter--}}
        {{--                </x-slot>--}}
        {{--            </x-card>--}}
        {{--        </x-tile>--}}

        <x-tile>
            <x-card>
                <x-slot name="header">
                    Reserver en plass
                </x-slot>
                <p>Rom:</p>
                <select name="room" id="room">
                    <option value="1">Rom 1</option>
                    <option value="2">Rom 2</option>
                    <option value="3">Rom 3</option>
                </select>
            </x-card>
        </x-tile>

        <x-tile>
            <x-card>
                <x-slot name="header">
                    Meldinger
                </x-slot>
                Meldinger
            </x-card>
        </x-tile>

    </div>
</x-app-layout>
