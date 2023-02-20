<?php

namespace App\Http\Livewire\Room;

use App\Models\Room;
use Livewire\Component;

class DeleteButton extends Component
{

    public $room;

    public function render()
    {
        return view('livewire.room.delete-button');
    }

    public function destroy($id)
    {
        $room = Room::find($id);

        $room->delete();

    }
}
