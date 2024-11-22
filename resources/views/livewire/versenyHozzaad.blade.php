<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-secondary text-white text-center">
            <h3 class="m-0">Verseny hozzáadása</h3>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="save">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Verseny neve</label>
                    <input type="text" class="form-control" id="name" wire:model="name"
                        value="{{ old('name') }}">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="year" class="form-label">Verseny éve</label>
                    <input type="text" class="form-control" id="year" wire:model="year"
                        value="{{ old('year') }}">
                    @error('year')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="goodpoints" class="form-label">Pontok jó válaszért:</label>
                    <input type="text" class="form-control" id="goodpoints" wire:model="points"
                        value="{{ old('goodpoints') }}">
                    @error('points')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="badpoints" class="form-label">Pontok rossz válaszért:</label>
                    <input type="text" class="form-control" id="badpoints" wire:model="badpoints"
                        value="{{ old('badpoints') }}">
                    @error('badpoints')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="emptypoints" class="form-label">Pontok nem adott válaszért:</label>
                    <input type="text" class="form-control" id="emptypoints" wire:model="emptypoints"
                        value="{{ old('emptypoints') }}">
                    @error('emptypoints')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="languages" class="form-label">Verseny nyelve:</label>
                    <select class="form-select" id="languages" wire:model="language">
                        <option value="">Válassz nyelvet</option>
                        <option value="HU" {{ old('languages') == 'HU' ? 'selected' : '' }}>HU</option>
                        <option value="EN" {{ old('languages') == 'EN' ? 'selected' : '' }}>EN</option>
                        <option value="DE" {{ old('languages') == 'DE' ? 'selected' : '' }}>DE</option>
                        <option value="FR" {{ old('languages') == 'FR' ? 'selected' : '' }}>FR</option>
                    </select>
                    @error('language')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Hozzáadás
                        <div wire:loading wire:target="save">
                            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><style>.spinner_jCIR{animation:spinner_B8Vq .9s linear infinite;animation-delay:-.9s}.spinner_upm8{animation-delay:-.8s}.spinner_2eL5{animation-delay:-.7s}.spinner_Rp9l{animation-delay:-.6s}.spinner_dy3W{animation-delay:-.5s}@keyframes spinner_B8Vq{0%,66.66%{animation-timing-function:cubic-bezier(0.36,.61,.3,.98);y:6px;height:12px}33.33%{animation-timing-function:cubic-bezier(0.36,.61,.3,.98);y:1px;height:22px}}</style><rect class="spinner_jCIR" x="1" y="6" width="2.8" height="12"/><rect class="spinner_jCIR spinner_upm8" x="5.8" y="6" width="2.8" height="12"/><rect class="spinner_jCIR spinner_2eL5" x="10.6" y="6" width="2.8" height="12"/><rect class="spinner_jCIR spinner_Rp9l" x="15.4" y="6" width="2.8" height="12"/><rect class="spinner_jCIR spinner_dy3W" x="20.2" y="6" width="2.8" height="12"/></svg>
                        </div>
                    </button>
                    <a href="/versenyek" wire:navigate class="btn btn-secondary">Versenyek</a>
                    
                </div>
            </form>
        </div>
    </div>
</div>
