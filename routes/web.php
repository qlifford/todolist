<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/', function () {
    return view('welcome');
});
*/


Auth::routes();

Route::get('/', [TodoController::class, 'index'])->name('index');
Route::get('/home', [TodoController::class, 'index'])->name('index');

Route::get('todos.create', [TodoController::class, 'create'])->name('todos.create');
Route::get('todos.edit', [TodoController::class, 'edit'])->name('todos.edit');
Route::post('todos.store', [TodoController::class, 'store'])->name('todos.store');

