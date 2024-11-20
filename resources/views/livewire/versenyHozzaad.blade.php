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
                    <button type="submit" class="btn btn-primary">Hozzáadás</button>
                    <a href="/versenyek" wire:navigate class="btn btn-secondary">Versenyek</a>
                </div>
            </form>
        </div>
    </div>
</div>
