<?php

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

Route::get('/', function () {
    return view('layouts.client.main');
});

//Admin
Route::prefix('admin')->middleware('authadmin')->group(function(){

});

//Shop
Route::prefix('shop/')->middleware('authshop')->group(function(){

});

//403
Route::get('403',function(){
    return view('403');
})->name('403');
