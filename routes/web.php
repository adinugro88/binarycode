<?php

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
    return redirect("/login");
});

Auth::routes();




Route::group(['prefix' => 'admin'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/student', [App\Http\Controllers\StudentController::class, 'index'])->name('student');
    Route::get('/kategori', [App\Http\Controllers\KategoriController::class, 'index'])->name('kategori');
    Route::get('/sertifikat', [App\Http\Controllers\SertifikatController::class, 'index'])->name('sertifikat');
    Route::get('/createsertifikat', [App\Http\Controllers\SertifikatController::class, 'create'])->name('createsertifikat');
    Route::get('/editsertifikat/{id}', [App\Http\Controllers\SertifikatController::class, 'edit'])->name('editsertifikat');
    Route::get('/viewsertifikat/{id}', [App\Http\Controllers\SertifikatController::class, 'view'])->name('viewsertifikat');
    Route::get('/viewtrialcard/{id}', [App\Http\Controllers\SertifikatController::class, 'trialcard'])->name('viewtrialcard');
    Route::get('sertifikat/download/{id}', [App\Http\Controllers\SertifikatController::class, 'download'])->name('downloadtrialcard');
});