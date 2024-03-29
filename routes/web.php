<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestsController;
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

Route::get('/test1', [TestsController::class,'one']);

Route::get('/test2', [TestsController::class,'two']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function(){
    Route::get('/stories', [App\Http\Controllers\StoriesController::class, 'index'])->name('stories.index');
    Route::get('/stories/{story}', [App\Http\Controllers\StoriesController::class, 'show'])->name('stories.show');
});

