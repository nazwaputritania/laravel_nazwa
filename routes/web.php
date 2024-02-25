<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SppController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PetugassController;

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

Route::resource('spp', SppController::class);

Route::resource('kelas', KelasController::class)->parameters([
    'kelas' => 'kelas'
]);

Route::resource('petugas', PetugassController::class)->parameters([
    'petugas' => 'petugas'
]);

//Route::controller(SppController::class)->group(function () {
    //Route::get('/spp', 'index')->name('spp.index');
    //Route::get('/spp/create', 'create')->name('spp.create');
    //Route::post('/spp', 'store')->name('spp.store');
    //Route::get('/spp/{id}', [SppController::class, 'show'])->name('spp.show');
    //Route::get('/spp/{id}/edit', 'edit')->name('spp.edit');
    //Route::put('/spp/{id}', 'update')->name('spp.update');
    //Route::delete('/spp/{id}', 'destroy')->name('spp.destroy');
//});

Route::get('/template', function () {
    return view('template.master');
});

Route::get('/coba', function () {
    return view('coba');
});