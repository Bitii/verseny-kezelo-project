<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Verseny extends Model
{
    use HasFactory;

    protected $table = 'versenyek';
    protected $primaryKey = 'verseny_szamId';
    public $timestamps = false;
    protected $fillable = [
        'verseny_nev',
        'verseny_ev',
        'pontok_jo',
        'pontok_rossz',
        'pontok_ures',
        'elerheto_nyelv'
    ];

    protected function casts(): array
    {
        return [
            'verseny_nev' => 'string',
            'verseny_ev' => 'integer',
            'pontok_jo' => 'integer',
            'pontok_rossz' => 'integer',
            'pontok_ures' => 'integer',
            'elerheto_nyelv' => 'string'
        ];
    }

    public function fordulok(): HasMany
    {
        return $this->hasMany(Fordulo::class, 'verseny_szamId');
    }
}