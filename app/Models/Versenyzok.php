<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Versenyzok extends Model
{
    protected $table = 'versenyzok';
    protected $primaryKey = 'versenyzoId';
    public $timestamps = false;

    public function user(){
        return $this->belongsTo(User::class, 'felhasznaloId');
    }

    public function fordulo(){
        return $this->belongsTo(Fordulo::class, 'forudloId');
    }
}
