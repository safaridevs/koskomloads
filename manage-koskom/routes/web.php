<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordController;
use App\Models\Truck;

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
Route::get('/admin', function () {
    return view('admin');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/trucks', [App\Http\Controllers\TruckController::class, 'index'])->name('search');
Route::get('/loads', [App\Http\Controllers\LoadController::class, 'index'])->name('loads');
Route::get('/create-update-truck-form', [App\Http\Controllers\TruckController::class, 'create'])->name('create.truck');
Route::post('/create-update-truck-form/{id?}', [App\Http\Controllers\TruckController::class, 'update'])->name('update.truck');
Route::post('/create-update-truck-form', [App\Http\Controllers\TruckController::class, 'store'])->name('update.store');
Route::get('/records', 'RecordController@index')->name('records.index');
Route::get('/records/create', 'RecordController@create')->name('records.create');
Route::post('/records', 'RecordController@store')->name('records.store');
Route::get('/records/{id}', 'RecordController@show')->name('records.show');
Route::get('/records/{id}/edit', 'RecordController@edit')->name('records.edit');
Route::put('/records/{id}', 'RecordController@update')->name('records.update');
Route::delete('/records/{id}', 'RecordController@destroy')->name('records.destroy');

