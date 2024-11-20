<div class="container bg-secondary-300">
    <fieldset>
        <legend class="text-center p-2 fs-3">Verseny hozzáadása</legend>
        <form wire:submit="save">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="name">Verseny neve</label>
                <input class="form-control border border-secondary-600" wire:model="name" type="text" value="{{ old('name') }}">
            </div>
            
            <div class="mb-3">
                <label class="form-label" for="year">Verseny éve</label>
                <input class="form-control border border-secondary-600" wire:model="year" type="text" value="{{ old('year') }}">
            </div>
            
            <div class="mb-3">
                <label class="form-label" for="goodpoints">Pontok jó válaszért:</label>
                <input class="form-control border border-secondary-600" wire:model="points" type="text" value="{{ old('goodpoints') }}">
            </div>
            
            <div class="mb-3">
                <label class="form-label" for="badpoints">Pontok rossz válaszért:</label>
                <input class="form-control border border-secondary-600" wire:model="badpoints" type="text" value="{{ old('badpoints') }}">
            </div>
            
            <div class="mb-3">
                <label class="form-label form-label-sm" for="emptypoints">Pontok nem adott válaszért:</label>
                <input class="form-control border border-secondary-600" wire:model="emptypoints" type="text" value="{{ old('emptypoints') }}">
            </div>
            
            <div class="mb-3">
                <label class="form-label " for="languages">Verseny nyelve:</label>
                <select wire:model="language" class="form-select form-selec-sm border border-secondary-600">
                    <option value="" {{ old('languages') == '' ? 'selected' : '' }}>Válassz nyelvet</option>
                    <option value="HU {{ old('languages') == 'HU' ? 'selected' : '' }}">HU</option>
                    <option value="EN {{ old('languages') == 'EN' ? 'selected' : '' }}">EN</option>
                    <option value="DE {{ old('languages') == 'DE' ? 'selected' : '' }}">DE</option>
                    <option value="FR {{ old('languages') == 'FR' ? 'selected' : '' }}">FR</option>
                </select>
            </div>
            @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="d-flex justify-content-evenly p-3">
                <input class="btn btn-primary" wire:click="add" type="submit" value="Hozzáadás" >
                <input type="button" value="Versenyek" class="btn btn-primary">
            </div>
        </form>
    </fieldset>
</div>
