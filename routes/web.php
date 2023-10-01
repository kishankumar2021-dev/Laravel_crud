<?php

use App\Http\Controllers\StudnetController;
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

Route::get('/',[StudnetController::class,'index'])->name('index');
Route::post('/', [StudnetController::class,'create'])->name('create');

Route::get('/edit/{id}', [StudnetController::class,'edit'])->name('edit');

Route::put('/edit/{id}', [StudnetController::class, 'update'])->name('upadte');

Route::get('/delete/{id}', [StudnetController::class, 'destroy'])->name('destroy');

