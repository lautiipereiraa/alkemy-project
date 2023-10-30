<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\JWT;


class UserController extends Controller
{    
    public function create(){
        return view("user.create");
    }
    public function store(Request $request){
        $datosDelUsuario = $request->all();
        $datos = User::create($datosDelUsuario);
        return redirect("/create");
    }
    //     public function login(Request $request){
    //     $credentials = request()->validate([
    //         'email' => 'required',
    //         'contrasena' => 'required',
    //     ]). [
    //         'email.required' => 'El campo email es obligatorio',
    //         'contrasena.required' => 'El campo contraseña es obligatorio'
    //     ];
    
    //     if(auth()->attempt($credentials)){
    //         request()->session()->regenerate();
    //         return redirect()->route('');
    //     }
    
    //     return back()->withErrors([
    //         'email' => 'Las credenciales no coinciden con nuestros registros'
    //     ]);
    // }
    // public function logout(){
    //     auth()->logout();
    //     request()->session()->invalidate();
    //     request()->session()->regenerate();
    //     return redirect()->route('/create');
    // }
}