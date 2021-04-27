<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    protected $fillable = ['puser_id', 'comentario', 'fechaentrega'];

    //Relacion 1 Prestamo 1 PUser
    public function puser(){
        return $this->belongsTo('App\Models\Puser');
    }
    //Relacion 1 Prestamo Muchos Detaller
    public function inventarios(){
        return $this->hasMany('App\Models\Detalleprestamo');
    }
}
