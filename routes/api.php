<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PayMethodController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoppingCartController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/**************************************** Rutas de User ***********************************************/

Route::get('/create', [UserController::class,'create'])->name('create');//Enrealidad es un post
Route::get('/create/user', [UserController::class,'store']);//Enrealidad es un post
Route::get('/edit', [UserController::class,'edit']); //Enrealidad es un put
Route::get('/update', [UserController::class,'update']); //Enrealidad es un put

/**************************************** Rutas de Category ***********************************************/

Route::get('/category', [CategoryController::class,'list']);
Route::post('/category/create', [CategoryController::class,'create']);

// Route::get('/category/create', [CategoryController::class,'create']); //Enrealidad es un post
Route::get('/category/store', [CategoryController::class,'store']);//Enrealidad es un post
Route::get('/category/edit', [CategoryController::class,'edit']);//Enrealidad es un put
Route::get('/category/update', [CategoryController::class,'update']);//Enrealidad es un put

/**************************************** Rutas de Products ***********************************************/

Route::get('/products/create', [ProductController::class,'create']); //Enrealidad es un post
Route::get('/products/store', [ProductController::class,'store']);//Enrealidad es un post
Route::get('/products/edit', [ProductController::class,'edit']);//Enrealidad es un put
Route::get('/products/update', [ProductController::class,'update']);//Enrealidad es un put

/**************************************** Rutas de PayMethods ***********************************************/

Route::get('/payMethod/create', [PayMethodController::class,'create']); //Enrealidad es un post
Route::get('/payMethod/store', [PayMethodController::class,'store']);//Enrealidad es un post
Route::get('/payMethod/edit', [PayMethodController::class,'edit']);//Enrealidad es un put
Route::get('/payMethod/update', [PayMethodController::class,'update']);//Enrealidad es un put

/**************************************** Rutas de ShoppingCart ***********************************************/

Route::get('/cart/create', [ShoppingCartController::class,'createCart']); //Enrealidad es un post
Route::get('/cart/store', [ShoppingCartController::class,'storeCart']);//Enrealidad es un post

/****************************************  ***********************************************/