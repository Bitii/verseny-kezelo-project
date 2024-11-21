<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fordulo extends Model
{
    use HasFactory;

    protected $table = 'fordulok';
    protected $primaryKey = 'forduloId';
    public $timestamps = false;
    protected $fillable = [
        'fordulo_nev' => 'required',
        'idopont' => 'required|date',
        'verseny_szamId',
    ];

    protected function casts(): array
    {
        return [
            'fordulo_nev' => 'string',
            'idopont' => 'date',
        ];
    }

    public function verseny(): BelongsTo{
        return $this->belongsTo(Verseny::class, 'verseny_szamId');
    }
}
