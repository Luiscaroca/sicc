<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $fillable =['nombre','n_serie','inventario_id','cantidad','estado','tipo_documento','n_documento','n_orden','proveedor','precio','file_path'];

    //Relacion 1 Articulo 1 Detalle
    public function detalle(){
        return $this->belongsTo('App\Models\Detalleprestamo');
    }

    public function art_inven()    {
        return $this->belongsTo('App\Models\Inventario', 'inventario_id');
    }

    //1 detalle muchos articulos
}
