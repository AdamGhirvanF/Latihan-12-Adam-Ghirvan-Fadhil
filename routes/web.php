<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChatBotController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=> 'chatbot'], function () {
    Route::get('', [ChatBotController::class,'index']);
    Route::post('process', [ChatBotController::class,'process']);
});

Route::group(['prefix'=> 'user'], function () {
    Route::get('', [UserController::class,'userSearch']);
    Route::get('/{id}', [UserController::class,'findUser']);
});
