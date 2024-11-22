<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-secondary text-white text-center">
                    <h4 class="m-0">Forduló hozzáadása</h4>
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
                        @if (session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session('error')}}
                            </div>
                        @endif
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif


                        <!-- Gombok elrendezése -->
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">Hozzáad
                                <div wire:loading wire:target="save">
                                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><style>.spinner_jCIR{animation:spinner_B8Vq .9s linear infinite;animation-delay:-.9s}.spinner_upm8{animation-delay:-.8s}.spinner_2eL5{animation-delay:-.7s}.spinner_Rp9l{animation-delay:-.6s}.spinner_dy3W{animation-delay:-.5s}@keyframes spinner_B8Vq{0%,66.66%{animation-timing-function:cubic-bezier(0.36,.61,.3,.98);y:6px;height:12px}33.33%{animation-timing-function:cubic-bezier(0.36,.61,.3,.98);y:1px;height:22px}}</style><rect class="spinner_jCIR" x="1" y="6" width="2.8" height="12"/><rect class="spinner_jCIR spinner_upm8" x="5.8" y="6" width="2.8" height="12"/><rect class="spinner_jCIR spinner_2eL5" x="10.6" y="6" width="2.8" height="12"/><rect class="spinner_jCIR spinner_Rp9l" x="15.4" y="6" width="2.8" height="12"/><rect class="spinner_jCIR spinner_dy3W" x="20.2" y="6" width="2.8" height="12"/></svg>
                                </div>
                            </button>
                            <a href="/versenyek/{{$verseny_szamId}}" wire:navigate class="btn btn-secondary">Vissza</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
