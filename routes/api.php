<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Panel\HeroesController;

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
    return $request->user();
})->middleware('auth:api');


Route::get('heroes', function ($id = null) {
    $ctrl = new HeroesController();
    return $ctrl->api($id);
});

Route::get('heroes/{id}', function ($id = null) {
    $ctrl = new HeroesController();
    return $ctrl->api($id);
});