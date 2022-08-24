<?php

use App\Http\Controllers\Admin\MainController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('articles',[MainController::class,'articleCount']); //for comments count
Route::get('article/detail',[MainController::class,'articleDetail']); //for article detail and its cmt including commentator detail
Route::get('article/comment',[MainController::class,'articleHavingComment']); // Article having at least one comment
Route::get('authors',[MainController::class,'authorArticle']); // Author with an array of article id



