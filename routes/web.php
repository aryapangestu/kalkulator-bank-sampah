<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InputUserController;
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

Route::get('/', function () {
    return view('index', ['title' => 'Dashboard']);
});
Route::get('/', [InputUserController::class, 'index']);
Route::get('/input', [InputUserController::class, 'create']);
Route::post('/input', [InputUserController::class, 'store']);

Route::get('/kategori', [CategoryController::class, 'index']);
Route::get('/kategori/{id}/edit', [CategoryController::class, 'edit']);
Route::get('/kategori/create', [CategoryController::class, 'create']);
Route::post('/kategori/store', [CategoryController::class, 'store']);
Route::put('/kategori/{id}', [CategoryController::class, 'update']);
