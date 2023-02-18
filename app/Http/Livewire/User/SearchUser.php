<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class SearchUser extends Component
{
    public $search = '';

    public function render()
    {
        if(strlen($this->search) >= 2) {
            $result = User::where('name', 'like', '%' . $this->search . '%')->get();
        } else {
            $result = [];
        }

        return view('livewire.user.search-users', [
          'users' => $result,
        ]);
    }

}
