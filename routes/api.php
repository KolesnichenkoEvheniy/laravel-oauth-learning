<?php

use Illuminate\Http\Request;

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

Route::get('/user', function (Request $request) {
    dd($request->user()->tokenCan('conference'));
    return $request->user();
})->middleware('auth:api');

/// test
Route::get('/whatever', function () {
    return 'reply from OAUTH SERVR 1';
})->middleware('allScopes:conference');

// All of the given scopes
Route::get('/whatever3', function () {
    return 'reply from OAUTH SERVR 3';
})->middleware('allScopes:conference');