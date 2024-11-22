<div class="container mt-5">
    <div class="row">
        <!-- Bal oszlop: Elérhető (regisztrált) felhasználók -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header bg-secondary text-white text-center">
                    <h5 class="m-0">Regisztrált felhasználók</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($felhasznalok as $felhasznalo)
                            <li class="list-group-item d-flex align-items-center">
                                <input type="checkbox" class="form-check-input me-2" wire:model="selectedUsers"
                                    value="{{ $felhasznalo->id }}">
                                <span>{{ $felhasznalo->vezeteknev }} {{ $felhasznalo->keresztnev }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <!-- Középső oszlop: Forduló részletes adatai -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header bg-secondary text-white text-center">
                    <h5 class="m-0">Forduló részletei</h5>
                </div>
                <div class="card-body">
                    @foreach ($versenyek as $verseny)
                        <p><strong>Verseny neve:</strong> {{ $verseny->verseny_nev }}</p>
                    @endforeach
                    @foreach ($fordulok as $fordulo)
                    <p><strong>Forduló neve:</strong> {{ $fordulo->fordulo_nev}}</p>
                    <p><strong>Kezdés ideje:</strong> {{$fordulo->idopont}}</p>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Jobb oszlop: Versenyzők, akik részt vesznek -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header bg-secondary text-white text-center">
                    <h5 class="m-0">Résztvevő versenyzők</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <!-- Példa versenyzők -->
                        <li class="list-group-item">Versenyző 1</li>
                        <li class="list-group-item">Versenyző 2</li>
                        <li class="list-group-item">Versenyző 3</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Alsó gombok -->
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="d-flex justify-content-between">
                <!-- Versenyző felvétele gomb -->
                <button class="btn btn-primary btn-lg">Versenyző felvétele
                    <div wire:loading wire:target="save">
                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><style>.spinner_jCIR{animation:spinner_B8Vq .9s linear infinite;animation-delay:-.9s}.spinner_upm8{animation-delay:-.8s}.spinner_2eL5{animation-delay:-.7s}.spinner_Rp9l{animation-delay:-.6s}.spinner_dy3W{animation-delay:-.5s}@keyframes spinner_B8Vq{0%,66.66%{animation-timing-function:cubic-bezier(0.36,.61,.3,.98);y:6px;height:12px}33.33%{animation-timing-function:cubic-bezier(0.36,.61,.3,.98);y:1px;height:22px}}</style><rect class="spinner_jCIR" x="1" y="6" width="2.8" height="12"/><rect class="spinner_jCIR spinner_upm8" x="5.8" y="6" width="2.8" height="12"/><rect class="spinner_jCIR spinner_2eL5" x="10.6" y="6" width="2.8" height="12"/><rect class="spinner_jCIR spinner_Rp9l" x="15.4" y="6" width="2.8" height="12"/><rect class="spinner_jCIR spinner_dy3W" x="20.2" y="6" width="2.8" height="12"/></svg>
                    </div>
                </button>

                <!-- Vissza gomb -->
                <a href="/versenyek" wire:navigate class="btn btn-secondary btn-lg">Vissza</a>
            </div>
        </div>
    </div>
</div>
