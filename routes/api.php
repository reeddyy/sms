<?php

Route::post('login', 'Api\V1\Admin\AuthController@login');

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {

    // Individuals
    Route::apiResource('individuals', 'IndividualsApiController');

    // Officers
    Route::apiResource('officers', 'OfficersApiController');

    // Facilitators
    Route::apiResource('facilitators', 'FacilitatorsApiController');

    // Corporates
    Route::apiResource('corporates', 'CorporatesApiController');
});
