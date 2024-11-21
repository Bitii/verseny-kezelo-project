<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-secondary text-white text-center">
                    <h2 class="m-0">{{ $verseny->verseny_nev }}</h2>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><strong>Verseny éve:</strong> {{ $verseny->verseny_ev }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><strong>Pontok helyes válaszért:</strong> {{ $verseny->pontok_jo }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><strong>Pontok helytelen válaszért:</strong> {{ $verseny->pontok_rossz }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><strong>Pontok üresen hagyott válaszért:</strong> {{ $verseny->pontok_ures }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><strong>Verseny nyelve:</strong> {{ $verseny->elerheto_nyelvek }}</span>
                        </li>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="/versenyek/{{ $verseny->verseny_szamId }}/forduloAdd" class="btn btn-primary btn-lg" wire:navigate>Forduló hozzáadása</a>
                    <a href="/versenyek" wire:navigate class="btn btn-secondary btn-lg">Vissza</a>
                </div>
                <div class="card-body">
                    <div class="card-header bg-secondary text-white text-center">
                        <h2 class="m-0">{{ $verseny->verseny_nev }} - fordulói</h2>
                    </div>
                    <div class="list-group">
                        @foreach($fordulok as $fordulo)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>{{$fordulo->fordulo_nev}}</span>
                            <a href="/fordulo/{{$fordulo->forduloId}}" wire:navigate class="btn btn-info btn-sm">Részletek</a>
                        </li>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
