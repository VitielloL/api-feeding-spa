<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DiscountController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('city')->group(function (){
    Route::get('/{city}',[CityController::class,'show'])->name('city');
    Route::post('/store',[CityController::class,'store'])->name('city.store');
    Route::put('/update/{city}',[CityController::class,'update'])->name('city.update');
    Route::delete('/delete/{city}',[CityController::class,'destroy'])->name('city.delete');
});

Route::prefix('group')->group(function ( ) {
    Route::get('/{group}',[GroupController::class,'show'])->name('group');
    Route::post('/store',[GroupController::class,'store'])->name('group.store');
    Route::put('/update/{group}',[GroupController::class,'update'])->name('group.update');
    Route::delete('/delete/{group}',[GroupController::class,'destroy'])->name('group.delete');
});

Route::prefix('campaign')->group(function ( ) {
    Route::get('/{campaign}',[CampaignController::class,'show'])->name('campaign');
    Route::post('/store',[CampaignController::class,'store'])->name('campaign.store');
    Route::put('/update/{campaign}',[CampaignController::class,'update'])->name('campaign.update');
    Route::delete('/delete/{campaign}',[CampaignController::class,'destroy'])->name('campaign.delete');
});

Route::prefix('product')->group(function ( ) {
    Route::get('/{product}',[ProductController::class,'show'])->name('product');
    Route::post('/store',[ProductController::class,'store'])->name('product.store');
    Route::put('/update/{product}',[ProductController::class,'update'])->name('product.update');
    Route::delete('/delete/{product}',[ProductController::class,'destroy'])->name('product.delete');
});

Route::prefix('discount')->group(function ( ) {
    Route::get('/{discount}',[DiscountController::class,'show'])->name('discount');
    Route::post('/store',[DiscountController::class,'store'])->name('discount.store');
    Route::put('/update/{discount}',[DiscountController::class,'update'])->name('discount.update');
    Route::delete('/delete/{discount}',[DiscountController::class,'destroy'])->name('discount.delete');
});
