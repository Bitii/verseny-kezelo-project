<?php

namespace App\Models;

use Livewire\Attributes\Validate;
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
        'name',
        'year',
        'points',
        'badpoints',
        'emptypoints',
        'language'
    ];

    protected function casts(): array
    {
        return [
            'name' => 'string',
            'year' => 'integer',
            'points' => 'integer',
            'badpoints' => 'integer',
            'emptypoints' => 'integer',
            'language' => 'string'
        ];
    }

    public function fordulok(): HasMany{
        return $this->hasMany(Fordulo::class, 'verseny_szamId');
    }
}
