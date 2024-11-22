<div class="container mt-5">
    <div class="text-center">
        <div class="card shadow-sm">
            <div class="card-header bg-secondary text-white">
                <h2 class="m-0">Versenyek</h2>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach ($versenyek as $verseny)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>{{ $verseny->verseny_nev }} - {{ $verseny->verseny_ev }}</span>
                            <a href="/versenyek/{{$verseny->verseny_szamId}}" wire:navigate class="btn btn-info btn-sm">Részletek</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="card-footer text-end">
                <a href="/" wire:navigate class="btn btn-secondary">Vissza</a>
            </div>
        </div>
    </div>
</div>
