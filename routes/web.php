<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

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
##Forntend Routes
Route::get('/',[FrontendController::class,'index']);

Route::get('/product/{id}',[FrontendController::class,'product'])->name('product');

Route::get('/subjects',[FrontendController::class,'subjects']);

Route::get('/subject',[FrontendController::class,'subject']);

Route::get('/selling',[FrontendController::class,'selling']);

Route::get('/sell_1',[FrontendController::class,'sell_1'])->middleware('auth');

Route::post('/sell_1_store',[FrontendController::class,'sell_1_store'])->name('selling_1')->middleware('auth');

Route::get('/sell_2/{id}',[FrontendController::class,'sell_2'])->name('sell_2')->middleware('auth');

Route::post('/sell_2_store/{id}',[FrontendController::class,'sell_2_store'])->name('selling_2')->middleware('auth');

Route::get('/sell_3/{id}',[FrontendController::class,'sell_3'])->name('sell_3')->middleware('auth');

Route::get('/cart',[FrontendController::class,'cart'])->name('cart')->middleware('auth');

Route::get('/addtocart/{id}',[FrontendController::class,'addtocart'])->name('addtocart')->middleware('auth');

Route::get('/removefromcart/{id}',[FrontendController::class,'removefromcart'])->name('removefromcart')->middleware('auth');


//PAYPAL ROUTES
Route::post('pay', [App\Http\Controllers\PaymentController::class, 'pay'])->name('payment');
Route::get('success', [App\Http\Controllers\PaymentController::class, 'success']);
Route::get('error', [App\Http\Controllers\PaymentController::class, 'error']);

//Profile ROUTES
Route::get('profile', [App\Http\Controllers\ProfileController::class, 'profile'])->middleware('auth');

Route::get('upload', [App\Http\Controllers\ProfileController::class, 'upload'])->middleware('auth');

Route::get('downloads', [App\Http\Controllers\DownloadController::class, 'index'])->middleware('auth');

Route::get('download/{id}', [App\Http\Controllers\DownloadController::class, 'download'])->middleware('auth')->name('download');




##Frontend Routes

Route::get('/informations',[FrontendController::class,'informations']);

Route::get('/copyright',[FrontendController::class,'copyright']);

Route::get('/terms',[FrontendController::class,'terms']);

Route::get('/about',[FrontendController::class,'about']);

Route::get('/privacy',[FrontendController::class,'privacy']);


require __DIR__.'/auth.php';