<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ServiceController;
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

// Route::get('/', function () {
//     return view('user');
// });

Route::get('/', [ServiceController::class,'getAllServices'])->name('home.index');   
Route::get('/add', [CategoryController::class,'getAllCategories'])->name('add-page');

Route::post('/', [ServiceController::class,'insertService'])->name('add.submit');