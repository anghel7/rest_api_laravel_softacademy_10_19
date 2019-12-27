<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Http\Requests\Api\Categorias\StoreUpdateRequest;

class CategoriaController extends BaseController
{
    //Listar todos los categorias
    public function index()
    {
        $categoriaList = Categoria::all();
        return $this->sendResponse($categoriaList, "LISTA DE CATEGORIAS RECUPERADA");
    }
    //Recuperar un categoria por id
    public function show(Categoria $categoria)
    {
        return $this->sendResponse($categoria, "CATEGORIA RECUPERADO");
    }
    //Editar un categoria por id
    public function update(StoreUpdateRequest $request, Categoria $categoria)
    {
        $categoria->update($request->all());
        return $this->sendResponse($categoria, "CATEGORIA EDITADO");
    }
    //Eliminar un categoria por id
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return $this->sendResponse($categoria, "CATEGORIA ELIMINADO");
    }

    //Crear un categoria
    public function store(StoreUpdateRequest $request)
    {
        $categoria = Categoria::create($request->all());
        return $this->sendResponse($categoria, "CATEGORIA CREADO");
    }
}
