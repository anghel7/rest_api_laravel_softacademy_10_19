<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $fillable = [
        'nombre',
        'apellido',
        'direccion',
        'fecha_nacimiento',
        'telefono',
        'email'
    ];

    protected $hidden= ['created_at','updated_at'];
}
