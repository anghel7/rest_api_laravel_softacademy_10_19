<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\ModoPago;
use App\Http\Requests\Api\ModoPago\StoreUpdateRequest;

class ModoPagoController extends BaseController
{
    //Listar todos los Modos de Pago
    public function index()
    {
        $Modo_pagoList = ModoPago::all();
        return $this->sendResponse($Modo_pagoList, "LISTA DE MODOS DE PAGO RECUPERADA");
    }
    //Recuperar un Modo de Pago por id
    public function show(ModoPago $modo_pago)
    {
        return $this->sendResponse($modo_pago, "MODO DE PAGO RECUPERADO");
    }
    //Editar un Modo de Pago por id
    public function update(StoreUpdateRequest $request, ModoPago $modo_pago)
    {
        $modo_pago->update($request->all());
        return $this->sendResponse($modo_pago, "MODO DE PAGO EDITADO");
    }
    //Eliminar un Modo de Pago por id
    public function destroy(ModoPago $modo_pago)
    {
        $modo_pago->delete();
        return $this->sendResponse($modo_pago, "MODO DE PAGO ELIMINADO");
    }

    //Crear un Modo de Pago
    public function store(StoreUpdateRequest $request)
    {
        $modo_pago = ModoPago::create($request->all());
        return $this->sendResponse($modo_pago, "MODO DE PAGO CREADO");
    }
}
