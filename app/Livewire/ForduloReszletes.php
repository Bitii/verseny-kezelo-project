<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class ForduloReszletes extends Component
{
    public $selectedUsers = [];

    public function render()
    {
        $felhasznalok = User::all();
        return view('livewire.forduloReszletes', ['felhasznalok' => $felhasznalok]);
    }
}
