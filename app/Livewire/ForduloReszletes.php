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
    public $nev;
    public $verseny_szamId;


    public function mount($id)
    {
        $this->felhasznalok = User::all() ?? collect();
        $this->fordulok = Fordulo::where('forduloId', $id)->get() ?? collect();
        $this->verseny_szamId = $this->fordulok->first()->verseny_szamId  ?? collect();
        $this->versenyek = Verseny::where('verseny_szamId', $this->verseny_szamId)->get() ?? collect();
        $this->versenyzok = Versenyzok::where('forduloId', $id)->get() ?? collect();
    }

    public function save()
    {
        $this->validate([
            'nev' => 'required|exists:felhasznalok,nev',
        ]);

        try {
            $felhasznalo = User::where('nev', $this->nev)->firstOrFail();
            $letezoVersenyzo = Versenyzok ::where('felhasznaloId', $felhasznalo->felhasznaloId)
                ->where('forduloId', $this->fordulok->first()->forduloId)
                ->first();

            if ($letezoVersenyzo) {
                $this->nev = "";
                session()->flash('error', 'Ez a felhasználó már létezik a versenyzők között.');
                return;
            }

            $versenyzok = new Versenyzok();
            $versenyzok->nev = $felhasznalo->nev;
            $versenyzok->felhasznaloId = $felhasznalo->felhasznaloId;
            $versenyzok->forduloId = $this->fordulok->first()->forduloId;
            $versenyzok->save();

            $this->reset('nev');
            $this->versenyzok = Versenyzok::where('forduloId', $this->fordulok->first()->forduloId)->get();

            session()->flash('message', 'A versenyző sikeresen hozzáadva!');
        } catch (\Exception $e) {
            session()->flash('error', 'Hiba történt a versenyző hozzáadásakor: ' . $e->getMessage());
        }
    }

    public function delVersenyzo($versenyzo_id)
    {
        $versenyzo = Versenyzok::find($versenyzo_id);
        $versenyzo->delete();

        $this->versenyzok = Versenyzok::where('forduloId', $this->fordulok->first()->forduloId)->get();
    }

    public function render()
    {
        return view('livewire.forduloReszletes', ['versenyzok' => $this->versenyzok]);
    }
}