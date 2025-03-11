<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PriceController;

Route::get('/', function () {return view('main.home');});
Route::get('/tentang-kami', function () {return view('main.tentang-kami');});
Route::get('/daftar-harga-laundry', [PriceController::class, 'index'])->name('daftar-harga-laundry');
Route::get('/blog', function () {return view('main.blog');});
Route::get('/bantuan', [FaqController::class, 'index']);
// footer
Route::get('/terms&condition', function () {return view('footer.terms&condition');});
Route::get('/privacy-policy', function () {return view('footer.privacy-policy');});
Route::get('/karir', function () {return view('footer.karir');});
Route::get('/karir/full-stack-web-developer', function () {return view('footer.karir-item');});
Route::get('/credit', function () {return view('footer.credit');});

