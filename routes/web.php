<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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
  //  return view('welcome');
  return csrf_token();
});

Route::post('task',[TaskController::class,'store']);
Route::get('tasks',[TaskController::class,'getList']);
Route::get('task/{id}',[TaskController::class,'get']);
Route::post('task/{id}',[TaskController::class,'update']);
Route::delete('task/delete/{id}',[TaskController::class,'destroy']);
