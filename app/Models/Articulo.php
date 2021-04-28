<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $fillable =['nombre','inventario_id','cantidad','estado','precio','file_path'];

    //Relacion 1 Articulo 1 Detalle
    public function detalle(){
        return $this->belongsTo('App\Models\Detalleprestamo');
    }

    public function art_inven()    {
        return $this->belongsTo(Inventario::class);
    }

    //1 detalle muchos articulos
}
