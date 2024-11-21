<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class ForduloReszletes extends Component
{
    public $felhasznalok;
    public $selectedUsers = [];

    public function mount(){
        $this->felhasznalok = User::all();
    }
    public function render()
    {
        
        return view('livewire.forduloReszletes', ['felhasznalok' => $this->felhasznalok]);
    }
}
