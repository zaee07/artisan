<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\RedirectController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
// view without controller
Route::view('testong', 'test', ['title' => 'tes1']);
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

// named route

Route::get('/products/{id}', function ($productId) {
    return "product = $productId";
})->name('product.detail');

Route::get('/products/{product}/items/{item}', function ($productId, $itemId) {
    return "product = $productId, item = $itemId";
})->name('product.item.detail');

Route::get('/categories/{id}', function ($categoryId) {
    return "Category $categoryId";
})->where('id', '[0-9]+')->name('category.detail');

Route::get('/users/{id?}', function ($id = '404') {
    return " id = $id";
})->name('user.detail');

// route with controller
Route::get('/request', [HelloController::class, 'req']);
// Route::get('/hello/{name}', [HelloController::class, 'hello']);
Route::get('/input/hello', [HelloController::class, 'firstName']);
Route::post('/input/hello', [HelloController::class, 'firstName']);

// request input nested with route group
Route::prefix('/response/type')->controller([HelloController::class])->group(function () {
    Route::post('/file/upload', 'foto');
    Route::get('/download', 'download')->name('download');
    Route::get('/show', 'show');
    Route::get('/save-file', 'save');
});

// redirect
Route::get('/redirect-to-download', [RedirectController::class, 'toDownload'])->name('redirect.to.download');
Route::get('/redirect-to-website', [RedirectController::class, 'toWebsite'])->name('redirect.to.website');


Route::redirect('/ig', '/');
Route::fallback(function () {
    return "404 not found || are you crazy? awokawok";
});