<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\pengambilanController;
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
Route::middleware(['auth','cekUser'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/visi-misi', [DashboardController::class, 'visimisi'])->name('visimisi');
    Route::get('/tentang-kami', [DashboardController::class, 'tentangkami'])->name('tentangkami');
    Route::get('/ketentuan', [DashboardController::class, 'ketentuan'])->name('ketentuan');
    Route::get('/pengajuan', [PengajuanController::class, 'index'])->name('pengajuan');
    Route::post('/simpan/data-diri', [PengajuanController::class, 'datadiri'])->name('simpandatadiri');
    Route::post('/edit/{id}', [PengajuanController::class, 'updatediri'])->name('updatediri');
    Route::post('/upload-data', [PengajuanController::class, 'uploadData'])->name('upload.data');
    Route::get('/pengambilan', [pengambilanController::class, 'index'])->name('pengambilan');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
});

Route::delete('/delete/{id}', [PengajuanController::class, 'delete'])->name('delete.datadiri');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::middleware(['auth','cekAdmin'])->group(function(){
    Route::get('/admin', [pengambilanController::class, 'indexAdmin'])->name('admin');
    Route::get('/print/datadiri/{id}', [pengambilanController::class, 'printdatadiri'])->name('printdataDiri');
    Route::get('/surat-permohonan/user/', [pengambilanController::class, 'suratpemohon'])->name('suratpemohon.index');
    Route::get('/documents/{id}/download', [pengambilanController::class, 'download'])->name('documents.download');
    Route::get('/kirim-surat-pemohon', [pengambilanController::class, 'kirimsurat'])->name('kirimsurat');
    Route::post('/upload-data-verif', [pengambilanController::class, 'uploadData'])->name('uploaddata.surat');
});