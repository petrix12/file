<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilesController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('files', [FilesController::class, 'index'])->name('user.files.index');
Route::post('upload', [FilesController::class, 'store'])->name('user.files.store');
Route::get('files/{file}', [FilesController::class, 'show'])->name('user.files.show');
Route::delete('delete/{file}', [FilesController::class, 'destroy'])->name('user.files.destroy');