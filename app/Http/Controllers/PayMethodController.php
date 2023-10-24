<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayMethodController extends Controller
{
    public function create(){
        echo "Esta funcion te va a redirigir al apartado para crear un metodo de pago";
    }

    public function store(Request $request){
        echo"Esta funcion te va a crear un metodo de pago";
    }

    public function edit(){
        echo "Esta funcion te va a redirigir al apartado para actualizar/editar un metodo de pago";
    }

    public function update(Request $request){
        echo "Esta funcion te va a actualizar/editar un metodo de pago";
    }
}
