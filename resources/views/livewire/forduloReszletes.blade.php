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
                    <p><strong>Forduló neve:</strong> Forduló 1</p>
                    <p><strong>Forduló száma:</strong> 1</p>
                    <p><strong>Kezdés ideje:</strong> 2024.11.20 10:00</p>
                    <p><strong>Befejezés ideje:</strong> 2024.11.20 12:00</p>
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
                <button class="btn btn-primary btn-lg">Versenyző felvétele</button>

                <!-- Vissza gomb -->
                <a href="/versenyek" wire:navigate class="btn btn-secondary btn-lg">Vissza</a>
            </div>
        </div>
    </div>
</div>
