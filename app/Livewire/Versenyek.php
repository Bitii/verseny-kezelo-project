<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Verseny;

class Versenyek extends Component
{
    public $name;
    public $year;
    public $points;
    public $badpoints;
    public $emptypoints;
    public $language;

    
    public function save()
    {
    //validate
        $this->validate([
        "name" => 'required|unique:versenyek,verseny_nev',
        "year" => 'required|integer|min:2000|unique:versenyek,verseny_ev',
        "points" => 'required|integer',
        "badpoints" => 'required|integer',
        "emptypoints" => 'required|integer',
        "language" => 'required',
    ]);

        $verseny = new Verseny();
        $verseny->verseny_nev = $this->name;
        $verseny->verseny_ev = $this->year;
        $verseny->pontok_jo = $this->points;
        $verseny->pontok_rossz = $this->badpoints;
        $verseny->pontok_ures = $this->emptypoints;
        $verseny->elerheto_nyelvek = $this->language;
        $verseny->save();


    }
    public function render()
    {
        return view('livewire.versenyHozzaad');
    }
}
