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
    return redirect('/home');
});

Route::get('/dashboard', function () {
    return view('backend.dashboard.dashboard');
});

Route::get('/home', function () {
    return view('frontend.pages.landings');
});
Route::get('/tentang', function () {
    return view('frontend.pages.about');
});

Route::get('/bantuan', function () {
    return view('frontend.pages.bantuan');
});

Route::get('/katalog', function () {
    return view('frontend.pages.katalog');
});


Route::get('/books', function () {
    return view('backend.books.index');
});

Route::get('/books/rak', function () {
    return view('backend.books.rak');
});

Route::get('/books/kategori', function () {
    return view('backend.books.kategori');
});

Route::get('/books/katalog', function () {
    return view('backend.books.katalog');
});


Route::get('/transaksi', function () {
    return view('backend.transaksi.index');
});

Route::get('/transaksi/semua-data', function () {
    return view('backend.transaksi.semua-data');
});

Route::get('/transaksi/sedang-dipinjam', function () {
    return view('backend.transaksi.sedang-dipinjam');
});

Route::get('/transaksi/sudah-dikembalikan', function () {
    return view('backend.transaksi.sudah-dikembalikan');
});

Route::get('/transaksi/keranjang/1', function() {
    return view('backend.transaksi.keranjang');
});


Route::get('/anggota', function() {
    return view('backend.anggota.index');
});

Route::get('/anggota/riwayat/1', function() {
    return view('backend.anggota.riwayat');
});

Route::get('/login', function() {
    return view('auth.index');
});

