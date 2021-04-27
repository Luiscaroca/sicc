<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;
    //relacion 1 Inventario a 1 Unidad
    public function unidade(){
        return $this->belongsTo('App\Models\Unidad');
    }
}
