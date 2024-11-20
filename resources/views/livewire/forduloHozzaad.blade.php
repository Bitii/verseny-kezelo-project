<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-secondary text-white text-center">
                    <h4 class="m-0">Forduló hozzáadása</h4>
                    {{ $verseny_szamId }}
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="save">
                        <!-- Forduló neve -->
                        <div class="mb-3">
                            <label for="fordulo_nev" class="form-label">Forduló neve</label>
                            <input type="text" class="form-control" id="fordulo_nev" wire:model="fordulo_nev">
                            @error('fordulo_nev')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Forduló száma -->
                        <div class="mb-3">
                            <label for="idopont" class="form-label">Forduló időpontja</label>
                            <input type="date" class="form-control" id="idopont" wire:model="idopont">
                            @error('idopont')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- display all errors --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="m-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif


                        <!-- Gombok elrendezése -->
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">Hozzáad</button>
                            <a href="/versenyek" wire:navigate class="btn btn-secondary">Vissza</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
