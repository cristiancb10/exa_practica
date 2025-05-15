<?php

use Illuminate\Support\Facades\Route;
//clase Route , acesso a metodos estaticos::
//se pone (la ruta , el controlador de la ruta o en caso la view) 
//->name('welcome') se puede dar nombre a la ruta 
//se accede a la ruta con . no /
Route::view('/','landing.index')->name('index');
Route::view('/about','landing.about')->name('about');
Route::view('/about/dos','landing.dos') -> name('dos');
Route::view('/tres','landing.tres')->name('tres');
Route::view('/cuatro','landing.cuatro')-> name('cuatro');
/*Route::get();
Route::post();
Route::put();
Route::delete();
Route::patch();*/








