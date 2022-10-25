<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityGroupController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\GroupCampaignController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('city')->group(function (){
    Route::get('/',[CityController::class,'index'])->name('city');
    Route::post('/store',[CityController::class,'store'])->name('city.store');
    Route::post('/update',[CityController::class,'update'])->name('city.update');
    Route::post('/delete',[CityController::class,'delete'])->name('city.delete');
});

Route::prefix('group')->group(function ( ) {
    Route::get('/',[CityGroupController::class,'index'])->name('group');
    Route::post('/store',[CityGroupController::class,'store'])->name('group.store');
    Route::post('/update',[CityGroupController::class,'update'])->name('group.update');
    Route::post('/delete',[CityGroupController::class,'delete'])->name('group.delete');
});

Route::prefix('campaign')->group(function ( ) {
    Route::get('/',[GroupCampaignController::class,'index'])->name('campaign');
    Route::post('/store',[GroupCampaignController::class,'store'])->name('campaign.store');
    Route::post('/update',[GroupCampaignController::class,'update'])->name('campaign.update');
    Route::post('/delete',[GroupCampaignController::class,'delete'])->name('campaign.delete');
});

Route::prefix('product')->group(function ( ) {
    Route::get('/',[ProductController::class,'index'])->name('product');
    Route::post('/store',[ProductController::class,'store'])->name('product.store');
    Route::post('/update',[ProductController::class,'update'])->name('product.update');
    Route::post('/delete',[ProductController::class,'delete'])->name('product.delete');
});

Route::prefix('discount')->group(function ( ) {
    Route::get('/',[DiscountController::class,'index'])->name('discount');
    Route::post('/store',[DiscountController::class,'store'])->name('discount.store');
    Route::post('/update',[DiscountController::class,'update'])->name('discount.update');
    Route::post('/delete',[DiscountController::class,'delete'])->name('discount.delete');
});
