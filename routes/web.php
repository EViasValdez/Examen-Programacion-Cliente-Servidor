<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

Route::get('/paginainicio',[ApiController::class,'paginainicio'])->name('pagina.inicio');

Route::get('/getPersonajes',[ApiController::class,'getPersonajes'])->name('get.Personajes');