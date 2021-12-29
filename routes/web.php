<?php

use App\Http\Controllers\Dashboard\Auth\AuthController;
use App\Http\Controllers\Dashboard\CoursesController;
use App\Http\Controllers\Dashboard\ImportStudentsController;
use App\Http\Controllers\Dashboard\StudentsController;
use App\Http\Controllers\Dashboard\TracksController;
use App\Http\Controllers\Front\GenerateCertificatesControllers;
use App\Http\Controllers\Front\HomeController;
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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('track/{id}', [HomeController::class,'show'])->name('track.show');
Route::post('get-certificat', [GenerateCertificatesControllers::class,'generate'])->name('generate.certificat');
Route::get('dashboard/login', [AuthController::class,'index'])->name('login');
Route::post('dashboard/check-login', [AuthController::class,'login'])->name('login');
Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'],function () {
    Route::post('logout', [AuthController::class,'logout'])->name('logout');
    Route::resource('tracks',TracksController::class);
    Route::resource('courses',CoursesController::class);
    Route::resource('students',StudentsController::class);

    Route::post('import/{id}',[ImportStudentsController::class,'import'])->name('students.import');

});
