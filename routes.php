<?php
Route::group(['prefix' => 'api', 'middleware' => '\Tymon\JWTAuth\Middleware\GetUserFromToken'], function () {
    Route::resource('provincials', 'Bishopm\Churchnet\Controllers\Api\ProvincialsController');
});