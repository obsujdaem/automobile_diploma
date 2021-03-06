<?php

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

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AuctionController;
use App\Http\Controllers\AutomobileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\DesignationsController;
use App\Http\Controllers\InStockController;
use App\Http\Controllers\mainController;
use App\Http\Controllers\ModelsController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [mainController::class, 'index'])->name('main');
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');
Route::get('/services', [ServicesController::class, 'index'])->name('services');

Route::prefix('/auction')->group(function () {
    Route::get('', [AuctionController::class, 'index'])->name('auction');
    Route::post('/search', [AuctionController::class, 'searchFromMain'])->name('main.search');
    Route::get('/search', [AuctionController::class, 'searchFromAuc'])->name('auction.search');
});

Route::get('/in-stock', [InStockController::class, 'index'])->name('in-stock');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
Route::get('/designations', [DesignationsController::class, 'index'])->name('designations');

Route::get('/automobile/{id}', [AutomobileController::class, 'index'])->name('automobile');
Route::get('/models/{brand_id}', [ModelsController::class, 'index']);
