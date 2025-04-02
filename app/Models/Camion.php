<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Camion extends Model
{
    use HasFactory;

    protected $table = 'camiones'; 

    protected $fillable = ['placa', 'codigo_interno', 'id_transporte', 'color', 'modelo', 'capacidad_toneladas', 'id_marca'];

    public function transporte()
    {
        return $this->belongsTo(Transporte::class, 'id_transporte');
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'id_marca');
    }
}

