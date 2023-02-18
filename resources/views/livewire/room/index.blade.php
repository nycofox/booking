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
                    <button class="btn btn-primary btn-small" wire:click="edit({{ $room->id }})">Editer</button>
                    <button class="btn btn-primary btn-small" wire:click="delete({{ $room->id }})">Slett</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <button class="btn btn-primary" wire:click="create">
        <i class="fas fa-plus"></i>
        Nytt rom
    </button>
</div>
