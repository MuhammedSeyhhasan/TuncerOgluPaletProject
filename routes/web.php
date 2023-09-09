<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ContactController;
use Illuminate\Database\Schema\IndexDefinition;






Route::get('/', [StaticController::class,'index']) ->name('home.index') ;
Route::get('/urunlerimiz',[StaticController::class,'urunlerimiz']) ->name('home.urunlerimiz');
Route::get('/hakimizda',[StaticController::class,'hakimizda']) ->name('home.hakimizda');
Route::get('/iletisim',[StaticController::class,'iletisim']) ->name('home.iletisim') ;


Route::get('/home.iletisim', [ContactController::class, 'contact']);
Route::post('send_message', [ContactController::class, 'sendEmail'])->name('contact.send'); 