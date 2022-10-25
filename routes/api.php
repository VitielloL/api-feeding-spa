<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\CityController;
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
    Route::post('/delete',[CityController::class,'update'])->name('city.delete');
});

Route::prefix('group')->group(function ( ) {
    Route::get('/',[GroupController::class,'index'])->name('group');
    Route::post('/store',[GroupController::class,'store'])->name('group.store');
    Route::post('/update',[GroupController::class,'update'])->name('group.update');
    Route::post('/delete',[GroupController::class,'update'])->name('group.delete');
});
