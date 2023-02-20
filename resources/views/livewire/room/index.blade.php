<div>
    <table class="table">
        <thead>
        <tr>
            <th>Rom</th>
            <th>Antall plasser</th>
            <th>Handlinger</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($rooms as $room)
            <tr>
                <td>{{ $room->name }}</td>
                <td>{{ $room->capacity }}</td>
                <td>
                    <div class="d-flex">
                    <button class="btn btn-primary btn-small" wire:click="edit({{ $room->id }})">Editer</button>
{{--                    <button class="btn btn-primary btn-small" wire:click="delete({{ $room->id }})">Slett</button>--}}
                    @livewire('room.delete-button', ['room' => $room])
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    @livewire('room.create-button')
</div>
