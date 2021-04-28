<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalleprestamo extends Model
{
    protected $fillable =['articulo_id','prestamo_id','cantidad','comentario'];

    //1 detalle muchos articulos

    public function articulo(){
        return $this->belongsTo('App\Models\Articulo');
    }
}



