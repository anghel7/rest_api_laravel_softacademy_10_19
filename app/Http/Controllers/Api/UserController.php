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
        //if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();
            $result = [
                "token" => $user->createToken("FacturacionApp")->accessToken
            ];
            return $this->sendResponse($result, "You are login");
        } else {
            return $this->sendError("Unauthorized", [], 401);
        }
    }

    public function me()
    { }
}
