<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function createCart(){
        echo"Esto va a redirigir para crear el carrito de compras";
    }

    public function storeCart(Request $request){
        echo "Esto te va a crear el carrito de compras";
    }

    public function updateCart(Request $request){
        echo "Esto va a actualizar el contenido del carrito";
    }

    public function deleteCart(Request $request){
        echo "Esta funcion te va a eliminar productos del carrito";
    }

    public function listCart(){
        echo "Esta funcion te va a listar los productos del carrito, con su correspondiente
        cantidad y precio subtotal.";
    }

    public function destroyCart(Request $request){
        echo "Esta funcion te va a borrar todos los productos del carrito";
    }
}
