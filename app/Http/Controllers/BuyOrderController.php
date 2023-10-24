<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyOrderController extends Controller
{
    public function create(){
        echo"Esta funcion te va a redirigir a la URL para crear tu orden de compra";
    }

    public function store(Request $request){
        echo"Esta funcion va a crear tu orden de compra";
    }

    //Falta finalizar el carrito correspondiente y actualizar el stock de los productos
}
