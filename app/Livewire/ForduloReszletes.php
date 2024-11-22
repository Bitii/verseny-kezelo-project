<?php

namespace App\Livewire;

use App\Models\Versenyzok;
use Livewire\Component;
use App\Models\Verseny;
use App\Models\User;
use App\Models\Fordulo;

class ForduloReszletes extends Component
{
    public $felhasznalok;
    public $fordulok;
    public $versenyek;
    public $versenyzok;

    public function mount($id){
        $this->felhasznalok = User::all();
        $this->fordulok = Fordulo::where('forduloId', $id)->get();
        $verseny_szamId = $this->fordulok->first()->verseny_szamId;
        $this->versenyek = Verseny::where('verseny_szamId', $verseny_szamId)->get();
    }

    public function save(){
        $this->validate([
        ]);

        try {
            $versenyzo = new Versenyzok();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    public function render()
    {
        
        return view('livewire.forduloReszletes');
    }
}
