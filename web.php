<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController; // 追加

Route::get('/', function () {
    return view('welcome');
});

Route::get('/top', function () {
    return view('top');
});

Auth::routes();//モデル項目追加箇所
Route::get('/top', 'TopController@topView')->name('top');

Route::get('/hello', [App\Http\Controllers\TestController::class, 'helloWorld']);



