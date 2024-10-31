<?php

use App\Http\Controllers\Backend\MediaController;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});






require __DIR__.'/auth.php';

# media files routes
Route::group(['prefix' => '', 'middleware' => ['auth']], function () {
    Route::get('/media-manager/get-files', [MediaController::class, 'files'])->name('uppy.index');
    Route::get('/media-manager/get-selected-files', [MediaController::class, 'selectedFiles'])->name('uppy.selectedFiles');
    Route::post('/media-manager/add-files', [MediaController::class, 'store'])->name('uppy.store');
    Route::get('/media-manager/delete-files/{id}', [MediaController::class, 'delete'])->name('uppy.delete');
});


Route::resource('/media-manager',MediaController::class);
