<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    use HasFactory;

    //Relacion 1 Unidad Muchos Usuarios
    public function usuarios(){
        return $this->hasMany('App\Models\User');
    }
    //Relacion 1 Unidad Muchos Inventarios
    public function inventarios(){
        return $this->hasMany('App\Models\Inventario');
    }
}
