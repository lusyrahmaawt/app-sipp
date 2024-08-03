<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenjadwalanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PendaftarCppobController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\PotoController;


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

Route::get('/', [AppController::class, 'index']);

Route::view('/logout', 'welcome');
Route::view('/ukm', 'ukm');
Route::view('/berita', [AppController::class, 'berita.berita']);
Route::get('/berita', [AppController::class, 'berita'])->name('berita');
Route::get('/berita/{slug}', [AppController::class, 'detail'])->name('berita.detail');
Route::view('/lengkap', 'berita.lengkap');
Route::view('/nib', 'fasilitasi.nib');
Route::view('/nibberanda', 'fasilitasi.nibberanda');
Route::view('/halal', 'fasilitasi.halal');
Route::view('/halalberanda', 'fasilitasi.halalberanda');
Route::view('/cppob', 'fasilitasi.cppob');
Route::view('/cppobberanda', 'fasilitasi.cppobberanda');
Route::view('/pirt', 'fasilitasi.pirt');
Route::view('/pirtberanda', 'fasilitasi.pirtberanda');
Route::view('/akun', 'akun');
Route::view('/umku', 'umku');
Route::view('/pangan', 'pangan');
Route::view('/jadwal', 'jadwal');



Route::prefix('/admin')->as('admin.')->group(function () {
    Route::get('/loginadmin', [AuthController::class, 'index'])->name('loginadmin');
    Route::post('/loginadmin-proses', [AuthController::class, 'loginadmin_proses'])->name('loginadmin-proses');
    Route::post('/logoutadmin', [AuthController::class, 'logoutadmin'])->name('logoutadmin');

    Route::middleware(['auth.admin'])->group(function () {
        Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
        Route::get('/index', [HomeController::class, 'index'])->name('index');
        Route::get('/user', [HomeController::class, 'index'])->name('index');
        Route::get('/create', [HomeController::class, 'create'])->name('user.create');
        Route::post('/store', [HomeController::class, 'store'])->name('user.store');
        Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('user.edit');
        Route::put('/update/{id}', [HomeController::class, 'update'])->name('user.update');
        Route::delete('/delete/{id}', [HomeController::class, 'delete'])->name('user.delete');

        Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
        Route::get('/penjadwalan', [PenjadwalanController::class, 'index'])->name('penjadwalan');
        Route::get('/tambahjadwal', [PenjadwalanController::class, 'tambahjadwal'])->name('tambahjadwal');
        Route::post('/tambahjadwal', [PenjadwalanController::class, 'penjadwalan'])->name('tambah');
        Route::get('/editjadwal/{id}', [PenjadwalanController::class, 'editjadwal'])->name('editjadwal');
        Route::put('/updatejadwal/{id}', [PenjadwalanController::class, 'updatejadwal'])->name('updatejadwal');
        Route::delete('/deletejadwal/{id}', [PenjadwalanController::class, 'deletejadwal'])->name('deletejadwal');


        Route::get('/blog', [BlogController::class, 'index'])->name('blog');
        Route::get('/blog/createblog', [BlogController::class, 'createblog'])->name('blog.createblog');
        Route::post('/blog/storeblog', [BlogController::class, 'storeblog'])->name('blog.storeblog');
        Route::get('/blog/editblog/{id}', [BlogController::class, 'editblog'])->name('blog.editblog');
        Route::post('/blog/updateblog/{id}', [BlogController::class, 'updateblog'])->name('blog.updateblog');
        Route::delete('/blog/destroy/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');

        Route::get('/video', [VideoController::class, 'index'])->name('video');
        Route::get('/video/createvideo', [VideoController::class, 'createvideo'])->name('video.createvideo');
        Route::post('/video/storevideo', [VideoController::class, 'storevideo'])->name('video.storevideo');
        Route::get('/video/editvideo/{id}', [VideoController::class, 'editvideo'])->name('video.editvideo');
        Route::post('/video/updatevideo/{id}', [VideoController::class, 'updatevideo'])->name('video.updatevideo');
        Route::delete('/video/destroyvideo/{id}', [VideoController::class, 'destroyvideo'])->name('video.destroyvideo');

        Route::get('/poto', [PotoController::class, 'index'])->name('poto');
        Route::get('/poto/createpoto', [PotoController::class, 'createpoto'])->name('poto.createpoto');
        Route::post('/poto/storepoto', [PotoController::class, 'storepoto'])->name('poto.storepoto');
        Route::get('/poto/editpoto/{id}', [PotoController::class, 'editpoto'])->name('poto.editpoto');
        Route::put('/poto/updatepoto/{id}', [PotoController::class, 'updatepoto'])->name('poto.updatepoto');

        Route::delete('/poto/destroypoto/{id}', [PotoController::class, 'destroypoto'])->name('poto.destroypoto');

        Route::get('/index', [PendaftarCppobController::class, 'index'])->name('index');
        Route::get('/pendaftarcppob', [PendaftarCppobController::class, 'index'])->name('pendaftarcppob');
        Route::get('/createcppob', [PendaftarCppobController::class, 'createcppob'])->name('createcppob');
        Route::post('/storecppob', [PendaftarCppobController::class, 'storecppob'])->name('storecppob');
        Route::get('/editcppob/{id}', [PendaftarCppobController::class, 'editcppob'])->name('editcppob');
        Route::put('/updatecppob/{id}', [PendaftarCppobController::class, 'updatecppob'])->name('updatecppob');
        Route::delete('/deletecppob/{id}', [PendaftarCppobController::class, 'deletecppob'])->name('deletecppob');
        Route::get('/exportPdf', [PendaftaranController::class, 'exportPdf'])->name('exportPdf');
    });
});


// LoginController Routes
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register-proses', [LoginController::class, 'register_proses'])->name('register-proses');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/forgot-password', [LoginController::class, 'forgot_password'])->name('forgot-password');
Route::post('/forgot-password-act', [LoginController::class, 'forgot_password_act'])->name('forgot-password-act');

Route::get('/validasi-forgot-password/{token}', [LoginController::class, 'validasi_forgot_password'])->name('validasi-forgot-password');
Route::post('/validasi-forgot-password-act', [LoginController::class, 'validasi_forgot_password_act'])->name('validasi-forgot-password-act');

Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {

    Route::get('/beranda', [AppController::class, 'beranda'])->name('beranda');
    Route::get('/pendaftaran', [PendaftaranController::class, 'daftar'])->name('pendaftaran');
    Route::get('/daftar-cppob', [PendaftaranController::class, 'DaftarCppob'])->name('daftar.cppob');
    Route::post('/daftar-cppob', [PendaftaranController::class, 'DaftarCppobPost'])->name('daftar.cppob.post');
    Route::get('riwayat-daftar', [PendaftaranController::class, 'riwayatdaftar'])->name('riwayat.daftar');
    Route::get('/daftar-cppob/{id}', [PendaftaranController::class, 'rincianPendaftaran'])->name('daftar.cppob.detail');
    Route::get('/daftar-cppob', [PendaftaranController::class, 'daftar'])->name('daftar.cppob');
    Route::get('/edit-daftar/{id}', [PendaftaranController::class, 'editdaftar'])->name('edit.daftar');
    Route::post('/update-daftar/{id}', [PendaftaranController::class, 'updatedaftar'])->name('update.daftar');
    Route::delete('/delete-daftar/{id}', [PendaftaranController::class, 'deletedaftar'])->name('delete.daftar');
    Route::get('/riwayat-pendaftaran/{id}', [PendaftaranController::class, 'detaildaftar'])->name('daftar.riwayat');
    Route::get('/penjadwalan', [AppController::class, 'showJadwal'])->name('penjadwalan');
    Route::get('/detaildaftar/{id}', [AppController::class, 'detaildaftar'])->name('detaildaftar');
    Route::get('/pendaftaran/{id}', [PendaftaranController::class, 'showForm'])->name('pendaftaran');
    Route::post('/pendaftaran/{id}', [PendaftaranController::class, 'store']);
});
