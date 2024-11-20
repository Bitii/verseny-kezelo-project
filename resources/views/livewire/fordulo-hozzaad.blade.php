<div>
    <p>itt adjuk hozzá a fordulókat</p>
    <form wire:submit.prevent="submit">
        <div class="form-group">
            <label for="fordulo_nev">Forduló neve</label>
            <input type="text" class="form-control" id="fordulo_nev" wire:model="fordulo_nev">
            @error('fordulo_nev')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group
        ">
            <label for="fordulo_szam">Forduló száma</label>
            <input type="number" class="form-control" id="fordulo_szam" wire:model="fordulo_szam">
            @error('fordulo_szam')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>
        <button type="submit" class="btn btn-primary">Hozzáad</button>
    </form>
</div>
