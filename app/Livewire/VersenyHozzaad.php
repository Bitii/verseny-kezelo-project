<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Verseny;

class VersenyHozzaad extends Component
{
    public string $name;
    public int $year;
    public int $points;
    public int $badpoints;
    public int $emptypoints;
    public string $language;
    public string $message;


    public function save()
    {

        $this->validate([
            "name" => 'required|unique:versenyek,verseny_nev',
            "year" => 'required|integer|min:2000|unique:versenyek,verseny_ev',
            "points" => 'required|integer',
            "badpoints" => 'required|integer',
            "emptypoints" => 'required|integer',
            "language" => 'required',
        ]);

        try {
            $verseny = new Verseny();
            $verseny->verseny_nev = $this->name;
            $verseny->verseny_ev = $this->year;
            $verseny->pontok_jo = $this->points;
            $verseny->pontok_rossz = $this->badpoints;
            $verseny->pontok_ures = $this->emptypoints;
            $verseny->elerheto_nyelvek = $this->language;
            $verseny->save();

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
