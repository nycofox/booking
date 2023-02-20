<?php

namespace App\Http\Livewire\Room;

use App\Models\Room;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.room.index', [
            'rooms' => Room::withCount('seats')->get(),
        ]);
    }

    public function create()
    {
        $this->dispatchBrowserEvent('modal', [
            'modal' => 'room-create',
            'action' => 'show',
        ]);
    }

}
