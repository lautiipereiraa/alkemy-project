<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Get -> /products (muestra la lista de los productos)
    // Get -> /products/{id} (devuelve un producto en especifico)
    // Post -> /products (crea un nuevo producto)
    // Put -> /products/{id} (actualiza un producto existente)
    // Delete -> /products/{id} (elimina un producto existente)

    public function create(){
        echo"Esta funcion te va a redirigir a la URL para crear un producto";
    }

    public function store(Request $request){
        echo"Esta funcion te va a crear el producto";
    }

    //FALTA VALIDAR DATOS, FORMATOS REQUERIDOS Y EL STOCK = 0.

    public function edit(){
        echo "Esta funcion te va a redirigir a la URL para que actualices el producto";
    }

    public function update(Request $request){
        echo "Esta funcion va a actualizar el producto";
    }

    public function destroy(Request $request){
        echo "Esta funcion va a hacer un borrado logico";
    }

    public function list(){
        echo "Esta funcion va a listar los productos, para conocer el stock";
    }
}
