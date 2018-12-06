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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', 'ApiAuthController@login');
Route::post('register', 'ApiAuthController@register');
Route::get('user', 'ApiAuthController@profile')->middleware('jwt.auth');

Route::get('queue', 'BloodDonationController@currentNumber');
Route::get('addQueue', 'BloodDonationController@increaseNumber')->middleware('jwt.auth');
Route::get('resetQueue', 'BloodDonationController@resetNumber')->middleware('jwt.auth');

Route::post('krs', 'User\ApiController@getKRS');
