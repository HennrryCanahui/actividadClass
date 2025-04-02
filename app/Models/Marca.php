<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Marca extends Model
{
    use HasFactory;
    protected $table = 'marcas';

    protected $fillable = ['descripcion'];

    public function camiones()
    {
        return $this->hasMany(Camion::class, 'id_marca');
    }
}
