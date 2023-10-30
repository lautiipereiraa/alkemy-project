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
        $datosDelUsuario["password"] = Hash::make($datosDelUsuario["password"]);
        User::create($datosDelUsuario);
        return redirect('/login');
    }
    public function index(){
        // dd(auth()->user());
        return view("user.index");
    }
}