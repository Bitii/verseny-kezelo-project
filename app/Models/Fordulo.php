<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
