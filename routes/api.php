<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('customer-illness-weight', 'CustomerIllnessWeightController@getCustomerIllnessWeight');

Route::get('critical-illness-icd', 'CriticalIllnessController@getCriticalICD');
Route::get('critical-illness-list', 'CriticalIllnessController@getCriticalList');

Route::get('general-illness-icd', 'GeneralIllnessController@getGeneralICD');
Route::get('general-illness-list', 'GeneralIllnessController@getGeneralList');

Route::get('mental-illness-icd', 'MentalIllnessController@getMentalICD');
Route::get('mental-illness-list', 'MentalIllnessController@getMentalList');

Route::post('calculate-health-score', 'HealthScoreController@calculateHealthScore');