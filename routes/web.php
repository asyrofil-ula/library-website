<?php

use App\Http\Controllers\Book;
use App\Http\Controllers\Member;
use App\Http\Controllers\pinjaman;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

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

// Route::get('/home', function () {
//     return view('home');
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/member', [Member::class, 'index']);
Route::get('member/tambah_member', [Member::class, 'create']);
Route::post('member/tambah_member', [Member::class, 'create_action']);
Route::get('/member/{id}/hapus', [Member::class, 'hapus']);
Route::get('/member/{id}/edit', [Member::class, 'edit']);
Route::post('/member/{id}/edit', [Member::class, 'edit_action']);
    
Route::get('/book', [Book::class, 'index']);
Route::get('book/tambah_book', [Book::class, 'create']);
Route::post('book/tambah_book', [Book::class, 'create_action']);
Route::get('/book/{id}/hapus', [Book::class, 'hapus']);
Route::get('/book/{id}/edit', [Book::class, 'edit']);
Route::post('/book/{id}/edit', [Book::class, 'edit_action']);


Route::get('/pinjaman', [pinjaman::class, 'index']);
Route::get('pinjaman/tambah_pinjaman', [pinjaman::class, 'create']);
Route::post('pinjaman/tambah_pinjaman', [pinjaman::class, 'create_action']);
Route::get('/pinjaman/{id}/hapus', [pinjaman::class, 'hapus']);
Route::get('/pinjaman/{id}/edit', [pinjaman::class, 'edit']);
Route::post('/pinjaman/{id}/edit', [pinjaman::class, 'edit_action']);
