<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengajuanController;
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
    return view('auth.login');
})->name('login');
// Route::get('/sign-up', function(){
//     return view('signUp');
// });

Route::post('/auth',[authController::class, 'auth'])->name('auth');
Route::get('/sign-up', [authController::class, 'register'])->name('daftar');
Route::post('/sign-up/daftar', [authController::class, 'daftar'])->name('store');

//middleware auth
Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/visi-misi', [DashboardController::class, 'visimisi'])->name('visimisi');
    Route::get('/tentang-kami', [DashboardController::class, 'tentangkami'])->name('tentangkami');
    Route::get('/ketentuan', [DashboardController::class, 'ketentuan'])->name('ketentuan');
    Route::get('/pengajuan', [PengajuanController::class, 'index'])->name('pengajuan');
    Route::get('/pengambilan', [PengajuanController::class, 'index'])->name('pengambilan');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
});