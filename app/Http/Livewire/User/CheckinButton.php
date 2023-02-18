<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class CheckinButton extends Component
{
    public $checkedIn;

    public function render()
    {
        $this->checkedIn = auth()->user()->checkedIn;

        return view('livewire.user.checkin-button', [
            'checkedIn' => $this->checkedIn,
        ]);
    }

    public function checkin()
    {
        auth()->user()->checkin();

        // Set Flash Message
        $this->dispatchBrowserEvent('alert',[
            'type'=>'success',
            'message'=>"Du sjekket inn!"
        ]);
    }

    public function checkout()
    {
        auth()->user()->checkout();

        // Set Flash Message
        $this->dispatchBrowserEvent('alert',[
            'type'=>'success',
            'message'=>"Du sjekket ut!"
        ]);
    }
}
