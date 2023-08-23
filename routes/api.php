<?php

use App\Http\Controllers\ParentsController;
use App\Http\Controllers\TeachersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('teachers', TeachersController::class);
Route::resource('parents', ParentsController::class);

Route::get('get-teachers', [TeachersController::class, 'getTeachers'])->name('api-get-teachers');
Route::get('get-parents', [ParentsController::class, 'getParents'])->name('api-get-parents');