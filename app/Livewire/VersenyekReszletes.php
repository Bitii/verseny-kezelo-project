<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Verseny;
use App\Models\Fordulo;

class VersenyekReszletes extends Component
{
    public $verseny;
    public $verseny_szamId;

    public $fordulok;
    
    public function mount($id)
    {
        $this->fordulok = Fordulo::where('verseny_szamId', $id)->get();
        $this->verseny = Verseny::find($id);
        $this->verseny_szamId = $id;
    }
    public function render()
    {
        return view('livewire.versenyekReszletes');
    }
}
