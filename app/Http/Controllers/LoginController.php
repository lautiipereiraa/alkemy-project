<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        $credenciales = request()->validate([
        'email'=> 'required',
        'password'=> 'required'
        ], [
            'email.required' => 'El campo de email es obligatorio',
            'password.required' => 'El campo de contraseña es obligatorio'
        ]
    );
    if(auth()->attempt($credenciales)){
        request()->session()->regenerate();
        return redirect("/");
    }
    return back()->withErrors([
        'email' => 'Las credenciales no coinciden con nuestros registros'
    ]);
}

    public function logout(){
        auth()->logout();
        return redirect('/login');
    }
    
    public function index(){
        return view('user.login');
    }
}
