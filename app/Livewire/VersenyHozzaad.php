<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Verseny;
use App\Rules\VersenySzabaly;

class VersenyHozzaad extends Component
{
    public string $name = '';
    public int $year;
    public int $points;
    public int $badpoints;
    public int $emptypoints;
    public string $language;
    public string $message;

    public function create(){
        
    }
    public function save()
    {
        $this->validate([
            'name' => ['required', 'string', new VersenySzabaly($this->name, $this->year)],
            'year' => 'required|integer',
            'points' => 'required|integer',
            'badpoints' => 'required|integer',
            'emptypoints' => 'required|integer',
            'language' => 'required|string'
        ]);

        try {
            $verseny = new Verseny();
            $verseny->verseny_nev = $this->name;
            $verseny->verseny_ev = $this->year;
            $verseny->pontok_jo = $this->points;
            $verseny->pontok_rossz = $this->badpoints;
            $verseny->pontok_ures = $this->emptypoints;
            $verseny->elerheto_nyelv = $this->language;
            $verseny->save();

            $this->reset('name', 'year', 'points', 'badpoints', 'emptypoints', 'language');
            session()->flash('message', 'A verseny sikeresen hozzáadva!');
        } catch (\Exception $e) {
            session()->flash('error', 'Hiba történt a verseny hozzáadásakor: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.versenyHozzaad');
    }
}
