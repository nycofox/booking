<?php

namespace App\Http\Livewire\Room;

use App\Models\Room;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.room.index', [
            'rooms' => Room::all(),
        ]);
    }

    public function delete($id)
    {
        $room = Room::find($id);

        $this->dispatchBrowserEvent('alert', [
            'type' => 'warning',
            'message' => 'Vil du virkelig slette ' . $room->name . '?',
        ]);

        $room->delete();

        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => $room->name . ' ble slettet!',
        ]);
    }
}
