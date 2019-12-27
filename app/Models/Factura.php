<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = 'facturas';

    protected $fillable = [
        'id_cliente',
        'id_modo_pago',
        'fecha'
    ];

    protected $hidden= ['created_at','updated_at'];

}
