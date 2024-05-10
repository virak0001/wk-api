<?php

use App\Http\Controllers\Api\UserCrudController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Orion\Facades\Orion;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// In Laravel, a route defines a URL pattern that directs incoming HTTP requests to specific
// actions or controllers within your application, enabling you to handle and respond to those
// requests effectively.

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['as' => 'api.'], function() {
    Orion::resource('users', UserCrudController::class);
});
