<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthLoginRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    //Manage the connection with backend
    public function authenticate(AuthLoginRequest $request)
    {
        $crendentials = $request->validated();

        if (auth()->attempt($crendentials)) {
            session()->regenerate();
            return redirect()->intended()->with("success", "You are in!");
        } else {
            return back()->withErrors(["password" => "Identifiants invalides"]);
        }
    }

    public function logout()
    {
        auth()->logout();
        session()->flush();
        return redirect()->route("index")->with("success", "You are now desconected");
    }
}
