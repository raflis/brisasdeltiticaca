<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->group(function(){
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('admin');
    Route::resource('pagefields', App\Http\Controllers\Admin\PageFieldController::class)->only(['update']);
    Route::get('pagefields/home', [App\Http\Controllers\Admin\PageFieldController::class,'home'])->name('pagefields.home');
    Route::get('pagefields/aboutus', [App\Http\Controllers\Admin\PageFieldController::class,'aboutus'])->name('pagefields.aboutus');
    Route::get('pagefields/events', [App\Http\Controllers\Admin\PageFieldController::class,'events'])->name('pagefields.events');
    Route::get('pagefields/workshops', [App\Http\Controllers\Admin\PageFieldController::class,'workshops'])->name('pagefields.workshops');
    Route::get('pagefields/blog', [App\Http\Controllers\Admin\PageFieldController::class,'blog'])->name('pagefields.blog');
    Route::get('pagefields/contact', [App\Http\Controllers\Admin\PageFieldController::class,'contact'])->name('pagefields.contact');
    Route::get('pagefields/configuration', [App\Http\Controllers\Admin\PageFieldController::class,'configuration'])->name('pagefields.configuration');
    Route::resource('sliders', App\Http\Controllers\Admin\SliderController::class);
    Route::resource('testimonials', App\Http\Controllers\Admin\TestimonialController::class);
    Route::resource('board_directors', App\Http\Controllers\Admin\BoardDirectorController::class);
    Route::resource('workshops', App\Http\Controllers\Admin\WorkshopController::class);
    Route::resource('workshop_events', App\Http\Controllers\Admin\WorkshopEventController::class);
    Route::resource('posts', App\Http\Controllers\Admin\PostController::class);
    Route::resource('categories', App\Http\Controllers\Admin\CategoryController::class)->only(['update']);
    Route::resource('one_events', App\Http\Controllers\Admin\OneEventController::class);
    Route::resource('two_events', App\Http\Controllers\Admin\TwoEventController::class);
    Route::get('categories/dinner', [App\Http\Controllers\Admin\CategoryController::class,'dinner'])->name('categories.dinner');
    Route::get('categories/lunch', [App\Http\Controllers\Admin\CategoryController::class,'lunch'])->name('categories.lunch');
    Route::get('categories/special', [App\Http\Controllers\Admin\CategoryController::class,'special'])->name('categories.special');
    Route::get('sales/excel', [App\Http\Controllers\Admin\SaleController::class, 'excel'])->name('sales.excel');
    Route::resource('sales', App\Http\Controllers\Admin\SaleController::class);
    Route::post('provinces', [App\Http\Controllers\Admin\UserController::class, 'getProvinces'])->name('provinces');
    Route::post('districts', [App\Http\Controllers\Admin\UserController::class, 'getDistricts'])->name('districts');
    Route::resource('users', App\Http\Controllers\Admin\UserController::class);
});
