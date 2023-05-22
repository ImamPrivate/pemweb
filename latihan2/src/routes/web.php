<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassRoomController;

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


Route::get('/home', function () {
    return view('home', [
        'name' => 'Maman',
        'role' => 'admin',
        'buah' => ['mangga', 'apel', 'kurma', 'jeruk']
    ]);
});

Route::get('/students', [StudentController::class, 'index']);
Route::get('/class', [ClassRoomController::class, 'index']);
