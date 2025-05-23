<?php

use App\Http\Controllers\HomerController;
use App\Http\Controllers\ClientesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('/',[HomerController::class,'index']);
Route::get('/', function(){
   return view('welcome');
});
Route::get('clientes/',[ClientesController::class,'index']);
Route::get('clientes/create',[ClientesController::class,'create']);
Route::get('clientes/{nombre}/',[ClientesController::class,'show']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
