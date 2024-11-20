<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Verseny;
use App\Models\Fordulo;

class ForduloHozzaad extends Component
{
    public $fordulo_nev;
    public $fordulok;
    public $idopont;
    public int $verseny_szamId;

    public function mount($id)
    {
        $this->verseny_szamId = $id;
    }
    public function save(){
        $this->validate([
            "fordulo_nev" => 'required|string',
            "idopont" => 'required',
            "verseny_szamId" => 'required|integer'
        ]);

        try {
            $fordulo = new Fordulo();
            $fordulo->fordulo_nev = $this->fordulo_nev;
            $fordulo->idopont = $this->idopont;
            $fordulo->verseny_szamId = $this->verseny_szamId;
            $fordulo->save();

            session()->flash('message', 'A forduló sikeresen hozzáadva!');
        } catch (\Exception $e) {
            session()->flash('error', 'Hiba történt a forduló hozzáadásakor: ' . $e->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.forduloHozzaad');
    }
}
