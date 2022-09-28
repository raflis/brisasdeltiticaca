<?php

use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('clear-cache', function() {
    $exitCode = Artisan::call('optimize:clear');
    //$exitCode = Artisan::call('config:clear');
    //$exitCode = Artisan::call('cache:clear');
    //$exitCode = Artisan::call('config:cache');
    return 'DONE';
});

Route::prefix('/myaccount')->group(function(){
    Route::post('loginPost', [App\Http\Controllers\Web\LoginController::class, 'login'])->name('login.login');
    Route::resource('login', App\Http\Controllers\Web\LoginController::class);
});

Route::group(['middleware' => ['auth'] ], function () {
    //Route::get('/dashboard', [AuthController::class,"dashboard"]);
    Route::get('logout', [App\Http\Controllers\Web\LoginController::class, 'logout'])->name('logout');
    Route::get('myaccount/workshops', [App\Http\Controllers\Web\ProfileController::class, 'workshops'])->name('profile.workshops');
    Route::get('myaccount/membership', [App\Http\Controllers\Web\ProfileController::class, 'membership'])->name('profile.membership');
    Route::post('myaccount/membership', [App\Http\Controllers\Web\ProfileController::class, 'membershipPost'])->name('profile.membershipPost');
    Route::post('myaccount/membership/cancel', [App\Http\Controllers\Web\ProfileController::class, 'membershipCancel'])->name('profile.membershipCancel');
    Route::resource('myaccount/profile', App\Http\Controllers\Web\ProfileController::class);
    Route::get('checkout/cart', [App\Http\Controllers\Web\CheckoutController::class, 'index'])->name('checkout.cart');
    Route::post('checkout/payment', [App\Http\Controllers\Web\CheckoutController::class, 'payment'])->name('checkout.payment');
    Route::post('checkout/confirmation', [App\Http\Controllers\Web\CheckoutController::class, 'confirmation'])->name('checkout.confirmation');
});

Route::get('/', [App\Http\Controllers\Web\WebController::class, 'index'])->name('index');
Route::get('nosotros', [App\Http\Controllers\Web\WebController::class, 'aboutus'])->name('aboutus');
Route::get('conciertos', [App\Http\Controllers\Web\WebController::class, 'events'])->name('events');
//Route::get('evento/{slug}/{id}', [App\Http\Controllers\Web\WebController::class, 'event'])->name('event');
Route::get('concierto/{slug}/{id}', [App\Http\Controllers\Web\WebController::class, 'event_buy'])->name('event');
Route::get('talleres', [App\Http\Controllers\Web\WebController::class, 'workshops'])->name('workshops');
Route::get('taller/{slug}/{id}', [App\Http\Controllers\Web\WebController::class, 'workshop_event'])->name('workshop_event');
Route::get('contacto', [App\Http\Controllers\Web\WebController::class, 'contact'])->name('contact');
Route::get('blog', [App\Http\Controllers\Web\WebController::class, 'blog'])->name('blog');
Route::get('post/{slug}/{id}', [App\Http\Controllers\Web\WebController::class, 'post'])->name('post');

Route::post('addtocart', [App\Http\Controllers\Web\CheckoutController::class, 'addToCart'])->name('addToCart');
Route::delete('removefromcart', [App\Http\Controllers\Web\CheckoutController::class, 'removeFromCart'])->name('removeFromCart');

/****** File Manager ******/

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get("storage-link", function () {
    $targetFolder = storage_path("app/public");
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage';
    symlink($targetFolder, $linkFolder);
});