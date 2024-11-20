<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Verseny;

class Versenyek extends Component
{

    public function render()
    {
        $versenyek = Verseny::orderBy('verseny_ev', 'desc')->get();
        return view('livewire.versenyek', ['versenyek' => $versenyek]);
    }
}
