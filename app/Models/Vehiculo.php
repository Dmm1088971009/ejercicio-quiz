<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $fillable = ['marca', 'modelo'];

    public function personas()
    {
        return $this->belongsToMany(Persona::class, 'persona_vehiculo');
    }
}
