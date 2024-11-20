<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Livewire\Attributes\Validate;

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
}
