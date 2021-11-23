<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Individuals
    Route::apiResource('individuals', 'IndividualsApiController');

    // Courses
    Route::apiResource('courses', 'CoursesApiController');

    // Officers
    Route::apiResource('officers', 'OfficersApiController');

    // Memberships Individuals
    Route::apiResource('memberships-individuals', 'MembershipsIndividualsApiController');

    // Certificates
    Route::apiResource('certificates', 'CertificatesApiController');

    // Enrolments Qualifications
    Route::apiResource('enrolments-qualifications', 'EnrolmentsQualificationsApiController');

    // Facilitators
    Route::apiResource('facilitators', 'FacilitatorsApiController');

    // Admissions Edp
    Route::apiResource('admissions-edps', 'AdmissionsEdpApiController');

    // Applicants Ada
    Route::apiResource('applicants-adas', 'ApplicantsAdaApiController');

    // Corporates
    Route::apiResource('corporates', 'CorporatesApiController');

    // Memberships Corporates
    Route::apiResource('memberships-corporates', 'MembershipsCorporatesApiController');

    // Qualifications App
    Route::apiResource('qualifications-apps', 'QualificationsAppApiController');
});
