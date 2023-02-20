<?php

namespace App\Http\Livewire\Room;

use App\Models\Room;
use Livewire\Component;

class CreateButton extends Component
{
    protected $rules = [
        'name' => 'required',
        'description' => 'required',
        'start_time' => 'required|date_format:H:i',
        'end_time' => 'required|date_format:H:i',
        'public' => 'boolean',
    ];

    public function render()
    {
        return view('livewire.room.create-button');
    }

    public function updated($propertyName)

    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        $this->validate();

        $room = Room::create([
            'name' => $this->name,
            'description' => $this->description,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
            'public' => $this->public ?? false,
        ]);

        return redirect()->route('room.index');
    }
}
