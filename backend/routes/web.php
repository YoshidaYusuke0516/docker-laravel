<?php

use Illuminate\Support\Facades\Route;
// コントローラー増えた際に毎回追加
use App\Http\Controllers\HelloController;
use App\Http\Controllers\IndexController;

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

Route::get('/', function () {
    return view('welcome');
});

// helloworld呼び出し
Route::get('/hello', [HelloController::class, 'index']);

// TOP画面呼び出し
Route::get('/index', [IndexController::class, 'index']);

// 詳細
Route::get('/index/detail/{id}',  [IndexController::class, 'detail']);