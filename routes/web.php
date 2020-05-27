<?php

use Illuminate\Support\Facades\Route;
//rutas web
Route::view('/','home')->name('home');


Route::get('acerca_de',function(){
    return "hola mundo :)";
})->name('about');
