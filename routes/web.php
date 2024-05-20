<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
// view without controller
Route::view('1', 'test', ['title' => 'tes1']);
Route::get('2', function () {
    return view('test', ['title' => 'tes2']);
});
Route::view('/3', 'tes.one', ['title' => 'oke3']);

// view with params
Route::get('/beli/{id}/{quan}/{name?}', function ($buyId, $quantity, $name='produk') {
    return "barang ke- $buyId nama barang , jumlah barang $quantity";
});
Route::get('/beli/{id}/', function ($buyId) {
    return "barang ke- $buyId";
})->where('id', '[0-9]');
Route::get('/buy/{id}/{q?}', function ($buyId, $q=1) {
    return "barang ke- $buyId, jumlah barang $q";
})->where('id', '[0-9]+');

Route::redirect('/ig', '/');
Route::fallback(function () {
    return "404 not found || are you crazy?";
});