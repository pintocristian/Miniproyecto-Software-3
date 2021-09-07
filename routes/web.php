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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin',[App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');


Route::get('/canasta',[App\Http\Controllers\CanastaController::class, 'index'])->name('index.index');
Route::get('/canasta/create',[App\Http\Controllers\CanastaController::class,'create']);
Route::post('/canasta',[App\Http\Controllers\CanastaController::class,'store']);
Route::get('/canasta/{canasta}/edit', [App\Http\Controllers\CanastaController::class, 'edit'])->name('canasta.edit');
Route::put('/canasta/{canasta}', [App\Http\Controllers\CanastaController::class, 'update'])->name('canasta.update');
Route::delete('/canasta/{canasta}', [App\Http\Controllers\CanastaController::class, 'destroy'])->name('canasta.delete');


Route::get('/organizacion',[App\Http\Controllers\OrganizacionController::class, 'index'])->name('index.index');
Route::get('/organizacion/create',[App\Http\Controllers\OrganizacionController::class, 'create']);
Route::post('/organizacion',[App\Http\Controllers\OrganizacionController::class, 'store']);
Route::get('/organizacion/{organizacion}',[App\Http\Controllers\OrganizacionController::class, 'edit'])->name('organizacion.edit');
Route::put('/organizacion/{organizacion}',[App\Http\Controllers\OrganizacionController::class, 'update'])->name('organizacion.update');
Route::delete('/organizacion/{organizacion}',[App\Http\Controllers\OrganizacionController::class, 'destroy'])->name('organizacion.delete');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
