<?php

namespace App\Http\Controllers\Api; //Lugar de trabajo

use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController; // Updated
use App\Models\Factura;
use App\Http\Requests\Api\Factura\StoreUpdateRequest;

class FacturaController extends BaseController
{
    //Listar todos las facturas
    public function index()
    {
        $facturaList = Factura::all();
        return $this->sendResponse($facturaList, "LISTA DE FACTURAS RECUPERADA");
    }
    //Recuperar una factura por id
    public function show(Factura $factura)
    {
        return $this->sendResponse($factura, "FACTURA RECUPERADO");
    }
    //Editar una factura por id
    public function update(StoreUpdateRequest $request, Factura $factura)
    {
        $factura->update($request->all());
        return $this->sendResponse($factura, "FACTURA EDITADO");
    }
    //Eliminar una factura por id
    public function destroy(Factura $factura)
    {
        $factura->delete();
        return $this->sendResponse($factura, "FACTURA ELIMINADO");
    }

    //Crear una factura
    public function store(StoreUpdateRequest $request)
    {
        $factura = Factura::create($request->all());
        return $this->sendResponse($factura, "FACTURA CREADO");
    }
}
