<?php

use App\Http\Controllers\pagesController;
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


Route::get('/crearinformetecnico',[pagesController::class,'crear'])->name('crear.informe');
Route::post('/crearinformetecnico',[pagesController::class,'store'])->name('crear.store');
Route::get('/visualizarinformestecnico',[pagesController::class,'ver'])->name('ver.informe');
Route::get('/detalle/{id}',[pagesController::class,'verinfpdf'])->name('detalle.pdf');
Route::get('/update/{id}',[pagesController::class,'updateinf'])->name('editar.informacion');
Route::put('/update/{id}',[pagesController::class,'update'])->name('crear.update');


Route::get('/PDF',[pagesController::class,'imprimir']);
Route::get('/PDF/{id}',[pagesController::class,'pdfdescargar'])->name('descargar.pdf');
Route::get('/buscar',[pagesController::class,'buscar'])->name('buscador');
