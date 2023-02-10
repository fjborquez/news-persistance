<?php

use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SitesController;
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

Route::get('/company/{id}', [CompaniesController::class, 'get']);
Route::post('/company', [CompaniesController::class, 'post']);

Route::get('/news/{id}', [NewsController::class, 'get']);
Route::post('/news', [NewsController::class, 'post']);

Route::get('/site/{id}', [SitesController::class, 'get']);
Route::post('/site', [SitesController::class, 'post']);
