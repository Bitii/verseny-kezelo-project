<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Verseny;
use App\Models\User;
use App\Models\Fordulo;

class ForduloReszletes extends Component
{
    public $felhasznalok;
    public $fordulok;
    public $versenyek;
    public $selectedUsers = [];

    public function mount($id){
        $this->felhasznalok = User::all();
        $this->fordulok = Fordulo::where('forduloId', $id)->get();
        $verseny_szamId = $this->fordulok->first()->verseny_szamId;
        $this->versenyek = Verseny::where('verseny_szamId', $verseny_szamId)->get();
    }
    public function render()
    {
        
        return view('livewire.forduloReszletes', ['felhasznalok' => $this->felhasznalok]);
    }
}
