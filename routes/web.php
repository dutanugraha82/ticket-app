<?php

use App\Http\Controllers\AdminCT;
use App\Http\Controllers\HomeCT;
use App\Http\Controllers\TiketCT;
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


Route::get("/", [HomeCT::class, 'index']);





Route::get('/admin', [AdminCT::class, 'index'] );
Route::get('/admin/tickets',[TiketCT::class,'index']);


