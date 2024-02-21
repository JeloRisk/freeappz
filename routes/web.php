<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\DownloadController;
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

// Route::get('/', function () {
//     return view('app');
// });
Route::get('/', [AppController::class, 'home'])->name('home.index');
Route::get('/download', [DownloadController::class, 'download'])->name('download');
