<div class="container bg-secondary-300">
    <fieldset>
        <legend class="text-center p-2 fs-3">Verseny hozzáadása</legend>
        <form action="#" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="name">Verseny neve</label>
                <input class="form-control border border-secondary-600" type="text" name="name" value="{{ old('name') }}">
            </div>
            
            <div class="mb-3">
                <label class="form-label" for="year">Verseny éve</label>
                <input class="form-control border border-secondary-600" type="text" name="year" value="{{ old('year') }}">
            </div>
            
            <div class="mb-3">
                <label class="form-label" for="goodpoints">Pontok jó válaszért:</label>
                <input class="form-control border border-secondary-600" type="text" name="goodpoints" value="{{ old('goodpoints') }}">
            </div>
            
            <div class="mb-3">
                <label class="form-label" for="badpoints">Pontok rossz válaszért:</label>
                <input class="form-control border border-secondary-600" type="text" name="badpoints" value="{{ old('badpoints') }}">
            </div>
            
            <div class="mb-3">
                <label class="form-label form-label-sm" for="emptypoints">Pontok nem adott válaszért:</label>
                <input class="form-control border border-secondary-600" type="text" name="emptypoints" value="{{ old('emptypoints') }}">
            </div>
            
            <div class="mb-3">
                <label class="form-label " for="languages">Verseny nyelve:</label>
                <select name="languages" class="form-select form-selec-sm border border-secondary-600">
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
                <input type="submit" value="Hozzáadás" class="btn btn-primary">
                <input type="button" value="Versenyek" class="btn btn-primary" onclick="window.location.href='/versenyek'">
            </div>
        </form>
    </fieldset>
</div>
