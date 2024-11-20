<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Verseny neve: {{ $verseny->verseny_nev }}</h1>
                <p>Verseny éve: {{ $verseny->verseny_ev }}</p>
                <p>Pontok helyes válaszért: {{ $verseny->pontok_jo }}</p>
                <p>Pontok helytelen válaszért: {{ $verseny->pontok_rossz }}</p>
                <p>Pontok üresen hagyott válaszért: {{ $verseny->pontok_ures }}</p>
                <p>Verseny nyelve: {{ $verseny->elerheto_nyelvek }}</p>
            </div>
            {{-- gombok a forduló hozzáadásához és vissza gomb --}}
            <div class="col-md-12">
                <a href="/versenyek/{{ $verseny->verseny_szamId }}/forduloAdd" class="btn btn-primary">Forduló
                    hozzáadása</a>
                <a href="/versenyek" wire:navigate class="btn btn-primary">Vissza</a>
            </div>
            {{-- versenyhez tartozó fordulók kilistázása --}}
            <div class="col-md-12">
                <h2>Fordulók</h2>
                <ul class="list-group">
                    @foreach ($fordulok as $fordulo)
                        <li
                            class="list-group
                    -item d-flex justify-content-between align-items-center">
                            <span>{{ $fordulo->fordulo_nev }} - {{ $fordulo->fordulo_szam }}</span>
                            <a href="/versenyek/{{ $verseny->verseny_szamId }}/fordulok/{{ $fordulo->fordulo_szamId }}"
                                wire:navigate class="btn btn-info btn-sm">Részletek</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
