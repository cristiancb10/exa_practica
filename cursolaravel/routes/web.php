<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;

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
Route::get('/',[HomeController::clase,'index']);
Route::get('cliente/',[ClientesController] );

//Route::get('/', function () {
    //return ('esta es la pagina principal');
//});
Route::get('curso', function() {
     return ('Bienvenido al curso');
});
Route::get('curso/{nombre}', function($nombre) {
    return ('Bienvenido al curso de: '.$nombre);
});
Route::get('curso/create',function(){
    return ('Esta es una pagina para crear un curso'.$nombre);
});
Route::get('curso/{nombre}/{categoria}', function($nombre,$categoria==null) {
    if(categoria)

    else
    return ('Bienvenido al curso de: '.$nombre);
});