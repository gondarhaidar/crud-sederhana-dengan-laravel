<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
    return view('welcome');
});
Route::resource('/student', StudentController::class)->except(['index', 'show', 'edit', 'store', 'update', 'delete']);
Route::get('student', [StudentController::class, 'index']);
Route::get('student/{student:id}', [StudentController::class, 'show']);
Route::get('student/{student:id}/edit', [StudentController::class, 'edit']);
Route::post('student', [StudentController::class, 'store']);
Route::put('student/{student:id}', [StudentController::class, 'update']);
Route::delete('student/{student:id}', [StudentController::class, 'destroy']);