<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(){
        echo "Esta funcion te va a redirigir a la URL para crear una categoria";
    }

    public function store(Request $request){
        echo "Esta funcion te va a crear una categoria";
    }

    public function edit(){
        echo "Esta funcion te va a redirigir a la URL para actualizar una categoria";
    }

    public function update(Request $request){ //Debo de actualizar x {id}.
        echo "Esta funcion te va a actualizar una categoria";
    }
}
