<?php

use App\Http\Controllers\BelajarController;
use App\Http\Controllers\biodataController;
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
    return view('dashboard');
});
Route::get('blog', function (){
    return view('blog');
});
Route::get('belajar', function (){
    return view('belajar');
});
Route::get('/biodata',[biodataController::class,'biodata']);

Route::get('input', [App\Http\Controllers\InputController::class, 'viewPostData']);
Route::post('input', [App\Http\Controllers\InputController::class, 'processPostData']);

Route::get('getdata', [App\Http\Controllers\GetDataController::class, 'viewGetData']);

Route::view('main', 'Main');