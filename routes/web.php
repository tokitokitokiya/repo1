<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;  //外部にあるPostControllerクラスをインポート。


Route::get('/', [PostController::class, 'index']);   
Route::get('/posts/create',[PostController::class, 'create']);
Route::get('/posts/{post}',[PostController::class, 'show']);
Route::post('/posts', [PostController::class, 'store']);
// '/posts/{対象データのID}'にGetリクエストが来たら、PostControllerのshowメソッドを実行する

