<div>
    <table class="table">
        <thead>
        <tr>
            <th>Rom</th>
            <th>Beskrivelse</th>
            <th>Åpent fra-til</th>
            <th>Antall plasser</th>
            <th>Handlinger</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($rooms as $room)
            <tr>
                <td><a href="#">{{ $room->name }}</a></td>
                <td>{{ $room->description }}</td>
                <td>{{ $room->start_time }} - {{ $room->end_time }}</td>
                <td>{{ $room->seats_count }}</td>
                <td>
                    <div class="d-flex">
                    <button class="btn btn-primary btn-small" wire:click="edit({{ $room->id }})">Editer</button>
                    @livewire('room.delete-button', ['room' => $room])
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fas fa-plus"></i>
            Legg til rom
        </button>
    </div>

    @push('modals')
        <x-modal>
            @livewire('room.create-form')
        </x-modal>
    @endpush
</div>
