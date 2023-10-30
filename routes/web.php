<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Ruta de creacion de user */

 Route::get('/user/create', [UserController::class,'store']);
 Route::get('/create', [UserController::class,'create']);
 Route::get('/', [UserController::class,'index']) -> name('user.index');

 /* Ruta de logueo */

 Route::get('/login', [LoginController::class,'index']);
 Route::post('/login', [LoginController::class, 'login']);

 /* Ruta de deslogin */

 Route::get('/logout', [LoginController::class,'logout']);

 /* Continuara.. */
