<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModoPago extends Model
{
    protected $table = 'modo_pagos';

    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    protected $hidden= ['created_at','updated_at'];
}
