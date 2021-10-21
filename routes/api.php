<?php

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
