<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengumumanController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route for Home Page

Route::get('/', [HomeController::class, 'index'])
->name('home');
Route::get('/tentang-kami', [HomeController::class, 'about'])
->name('about');
Route::get('/jadwal', [HomeController::class, 'jadwal'])
->name('jadwal');
Route::get('/daftar-harga', [HomeController::class, 'harga'])
->name('harga');
Route::get('/kontak-kami', [HomeController::class, 'kontak'])
->name('kontak');
Route::get('/form-pendaftaran', [HomeController::class, 'form'])
->name('form');
Route::get('/pengumuman-kelulusan', [HomeController::class, 'pengumuman'])
->name('pengumuman');
Route::get('/success', [HomeController::class, 'success'])
->name('success');

Route::resource('form', HomeController::class);
Route::resource('pengumuman', HomeController::class);
Route::resource('pengumuman', PengumumanController::class);



Route::get('admin-page', function() {
    return 'pages.admin.dashboard';
})->middleware('role:admin')->name('admin.page');

Route::get('user-page', function() {
    return 'pages.admin.dashboard-user';
})->middleware('role:user')->name('user.page');


// Route Auth

Route::get('/login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::group(['middleware' => 'auth'], function () {
    // Route for Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])
->name('dashboard');
Route::get('/form-kursus', [DashboardController::class, 'form'])
->name('form-kursus');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');



});
