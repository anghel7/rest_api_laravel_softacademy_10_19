<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    //Listar todos los clientes
    public function listar(){
        $listaClientes = Cliente::all();
        return response()->json($listaClientes);  
    }
    //Recuperar un cliente por id

    //Editar un cliente por id

    //Eliminar un cliente por id

    //Crear un cliente
}
