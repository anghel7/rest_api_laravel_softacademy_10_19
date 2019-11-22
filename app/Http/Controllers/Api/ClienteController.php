<?php

namespace App\Http\Controllers\Api; //Lugar de trabajo

use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController; // Updated
use App\Models\Cliente;
use App\Http\Requests\Api\Clientes\StoreRequest;
use App\Http\Requests\Api\Clientes\UpdateRequest;

class ClienteController extends BaseController
{
    //Listar todos los clientes
    public function index()
    {
        $clienteList = Cliente::all();
        return $this->sendResponse($clienteList, "LISTA DE CLIENTES RECUPERADA");
    }
    //Recuperar un cliente por id
    public function show(Cliente $cliente)
    {
        return $this->sendResponse($cliente, "CLIENTE RECUPERADO");
    }
    //Editar un cliente por id
    public function update(UpdateRequest $request, Cliente $cliente)
    {
        $cliente->update($request->all());
        return $this->sendResponse($cliente, "CLIENTE EDITADO");
    }
    //Eliminar un cliente por id
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return $this->sendResponse($cliente, "CLIENTE ELIMINADO");
    }

    //Crear un cliente
    public function store(StoreRequest $request)
    {
        $cliente = Cliente::create($request->all());
        return $this->sendResponse($cliente, "CLIENTE CREADO");
    }
}
