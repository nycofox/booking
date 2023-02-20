<div>
    <div class="form-group">
        <label for="name">Navn</label>
        <input type="text" class="form-control" id="name" wire:model="name">
        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="form-group">
        <label for="description">Beskrivelse</label>
        <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                  wire:model="description"></textarea>
        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="form-group">
        <label for="is_public">Offentlig?</label>
        <input type="checkbox" class="form-checkbox" id="public" wire:model="public">
        @error('public') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="form-group">
        <label for="start_time">Starttid</label>
        <input type="time" class="form-control @error('start_time') is-invalid @enderror" id="start_time"
               wire:model="start_time">
        @error('start_time') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="form-group">
        <label for="end_time">Sluttid</label>
        <input type="time" class="form-control @error('end_time') is-invalid @enderror" id="end_time"
               wire:model="end_time">
        @error('end_time') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <button type="submit" class="btn btn-primary">Lagre</button>

</div>
