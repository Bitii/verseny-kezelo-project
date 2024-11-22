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
                        @if ($felhasznalok)
                            @foreach ($felhasznalok as $felhasznalo)
                                <li class="list-group-item d-flex align-items-center">
                                    <span>{{ $felhasznalo->nev }}</span>
                                </li>
                            @endforeach
                        @endif
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
                    @if ($versenyek)
                        @foreach ($versenyek as $verseny)
                            <p><strong>Verseny neve:</strong> {{ $verseny->verseny_nev }}</p>
                        @endforeach
                    @endif
                    @if ($fordulok)
                        @foreach ($fordulok as $fordulo)
                            <p><strong>Forduló neve:</strong> {{ $fordulo->fordulo_nev }}</p>
                            <p><strong>Kezdés ideje:</strong> {{ $fordulo->idopont }}</p>
                        @endforeach
                    @endif
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
                    <div class="mb-3">
                        <label for="versenyzo" class="form-label">Versenyző neve</label>
                        <input type="text" class="form-control" name="nev" wire:model="nev" />
                        @error('nev')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                        <button type="button" class="btn btn-primary my-2" wire:click="save">Versenyző hozzáadása
                            <div wire:loading wire:target="save">
                                <svg width="24" height="24" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <style>
                                        .spinner_jCIR {
                                            animation: spinner_B8Vq .9s linear infinite;
                                            animation-delay: -.9s
                                        }

                                        .spinner_upm8 {
                                            animation: spinner_B8Vq .9s linear infinite;
                                            animation-delay: -.8s
                                        }

                                        .spinner_2eL5 {
                                            animation: spinner_B8Vq .9s linear infinite;
                                            animation-delay: -.7s
                                        }

                                        .spinner_Rp9l {
                                            animation: spinner_B8Vq .9s linear infinite;
                                            animation-delay: -.6s
                                        }

                                        .spinner_dy3W {
                                            animation: spinner_B8Vq .9s linear infinite;
                                            animation-delay: -.5s
                                        }

                                        @keyframes spinner_B8Vq {
                                            0% {
                                                transform: scaleY(1)
                                            }

                                            50% {
                                                transform: scaleY(.4)
                                            }

                                            100% {
                                                transform: scaleY(1)
                                            }
                                        }
                                    </style>
                                    <rect class="spinner_jCIR" x="2.2" y="6" width="2.8" height="12" />
                                    <rect class="spinner_upm8" x="7" y="6" width="2.8" height="12" />
                                    <rect class="spinner_2eL5" x="11.8" y="6" width="2.8" height="12" />
                                    <rect class="spinner_Rp9l" x="16.6" y="6" width="2.8" height="12" />
                                    <rect class="spinner_dy3W" x="21.4" y="6" width="2.8" height="12" />
                                </svg>
                            </div>
                        </button>
                        @if (session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>

                    <ul class="list-group">
                        @if ($versenyzok)
                            @foreach ($versenyzok as $versenyzo)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>{{ $versenyzo->nev }}</span>
                                    <button
                                        class="btn btn-outline-danger btn-sm rounded-circle d-flex align-items-center justify-content-center"
                                        style="width: 25px; height: 25px; font-size: 0.8rem; padding: 0;"
                                        wire:click="delVersenyzo({{ $versenyzo->versenyzoId }})">X
                                    </button>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4 text-end">
        <a href="/versenyek/{{$verseny_szamId}}" wire:navigate class="btn btn-secondary">Vissza</a>
    </div>
</div>
