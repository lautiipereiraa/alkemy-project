<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Get -> /users (devuelve una lsita de user)
    // Get -> /users/{id} (devuelve un usuario en especifico)
    // Post -> /users (crea un nuevo user)
    // Put -> /users/{id} (actualiza un user exstente)
    // Delete -> /users/{id} (elimina un usuario existente)

    public function create(){
        echo "Esta funcion te va a redirigir al formulario para crearte el user";
    }

    public function store(Request $request){
        echo"Esta funcion te va a crear el user";
    }

    public function edit(){
        echo "Esta function me va a mostrar el formulario de edicion del user";
    }

    public function update(Request $request){
        echo "Esta function me va a actualizar el recurso del user";
    }
}