<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transporte extends Model
{
    use HasFactory;
    protected $table = 'transportes';

    protected $fillable = ['codigo', 'nombre', 'razon_social'];

    public function camiones()
    {
        return $this->hasMany(Camion::class, 'id_transporte');
    }
}

