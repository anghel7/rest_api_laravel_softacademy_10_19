<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;
use App\Http\Requests\Api\Users\StoreRequest;
use App\Http\Requests\Api\Users\LoginRequest;
use App\User;
use Illuminate\Support\Facades\Auth;


class UserController extends BaseController
{

    public function register(StoreRequest $request)
    {
        $request->merge([
            "password" => bcrypt($request->input("password"))
        ]);
        $user = User::create($request->all());
        return $this->sendResponse($user, "Usuario Creado", 201);
    }

    public function login(LoginRequest $request)
    {
        if (Auth::attempt($request->all())) {
            $user = Auth::user();
            // adding comment
            $result = [
                "token" => $user->createToken("myApp")->accessToken
            ];            
            return $this->sendResponse($result, "Inicio sesion", 200);
        } else {
            return $this->sendError("No authorizado", [], 401);
        }
    }

    public function me()
    {
        $user = Auth::user();
        return $this->sendResponse($user, "Tu usuario", 200);
    }
}
