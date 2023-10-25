<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function list(){
        $categories = Category::all();
        return response()->json(['categorias' => $categories]);
    }

    public function create(Request $request){
        $category = new Category();
        $category -> nombre = $request->nombre;
        $category -> save();

        return response()->json(['mensaje'=> 'Categoria creada']);
    }
    
    // public function create(){
    //     echo "Esta funcion te va a redirigir a la URL para crear una categoria";
    // }

    // public function store(Request $request){
    //     echo "Esta funcion te va a crear una categoria";
    // }

    // public function edit(){
    //     echo "Esta funcion te va a redirigir a la URL para actualizar una categoria";
    // }

    // public function update(Request $request){ //Debo de actualizar x {id}.
    //     echo "Esta funcion te va a actualizar una categoria";
    // }
}
