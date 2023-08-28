<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RunnerEnrollController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/runner-enroll', [RunnerEnrollController::class, 'create'])->name('runner.enroll');

Route::post('/runner-enroll', [RunnerEnrollController::class, 'store'])->name('runner.enroll');

Route::get('/runner-results', [RunnerEnrollController::class, 'result'])->name('runner.results');

Route::get('/save-results', [RunnerEnrollController::class, 'createResult'])->name('save.runner.results');