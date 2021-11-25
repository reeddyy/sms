<?php

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Audit Logs
    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // Individuals
    Route::delete('individuals/destroy', 'IndividualsController@massDestroy')->name('individuals.massDestroy');
    Route::post('individuals/parse-csv-import', 'IndividualsController@parseCsvImport')->name('individuals.parseCsvImport');
    Route::post('individuals/process-csv-import', 'IndividualsController@processCsvImport')->name('individuals.processCsvImport');
    Route::resource('individuals', 'IndividualsController');

    // Levels
    Route::delete('levels/destroy', 'LevelsController@massDestroy')->name('levels.massDestroy');
    Route::resource('levels', 'LevelsController');

    // Modules
    Route::delete('modules/destroy', 'ModulesController@massDestroy')->name('modules.massDestroy');
    Route::post('modules/parse-csv-import', 'ModulesController@parseCsvImport')->name('modules.parseCsvImport');
    Route::post('modules/process-csv-import', 'ModulesController@processCsvImport')->name('modules.processCsvImport');
    Route::resource('modules', 'ModulesController');

    // Class Intakes
    Route::delete('class-intakes/destroy', 'ClassIntakesController@massDestroy')->name('class-intakes.massDestroy');
    Route::resource('class-intakes', 'ClassIntakesController');

    // Courses
    Route::delete('courses/destroy', 'CoursesController@massDestroy')->name('courses.massDestroy');
    Route::post('courses/parse-csv-import', 'CoursesController@parseCsvImport')->name('courses.parseCsvImport');
    Route::post('courses/process-csv-import', 'CoursesController@processCsvImport')->name('courses.processCsvImport');
    Route::resource('courses', 'CoursesController');

    // Officers
    Route::delete('officers/destroy', 'OfficersController@massDestroy')->name('officers.massDestroy');
    Route::post('officers/parse-csv-import', 'OfficersController@parseCsvImport')->name('officers.parseCsvImport');
    Route::post('officers/process-csv-import', 'OfficersController@processCsvImport')->name('officers.processCsvImport');
    Route::resource('officers', 'OfficersController');

    // Grades
    Route::delete('grades/destroy', 'GradesController@massDestroy')->name('grades.massDestroy');
    Route::post('grades/parse-csv-import', 'GradesController@parseCsvImport')->name('grades.parseCsvImport');
    Route::post('grades/process-csv-import', 'GradesController@processCsvImport')->name('grades.processCsvImport');
    Route::resource('grades', 'GradesController');

    // Member Class
    Route::delete('member-classes/destroy', 'MemberClassController@massDestroy')->name('member-classes.massDestroy');
    Route::resource('member-classes', 'MemberClassController');

    // Status
    Route::delete('statuses/destroy', 'StatusController@massDestroy')->name('statuses.massDestroy');
    Route::resource('statuses', 'StatusController');

    // Memberships Individuals
    Route::delete('memberships-individuals/destroy', 'MembershipsIndividualsController@massDestroy')->name('memberships-individuals.massDestroy');
    Route::resource('memberships-individuals', 'MembershipsIndividualsController');

    // Certificates
    Route::delete('certificates/destroy', 'CertificatesController@massDestroy')->name('certificates.massDestroy');
    Route::post('certificates/parse-csv-import', 'CertificatesController@parseCsvImport')->name('certificates.parseCsvImport');
    Route::post('certificates/process-csv-import', 'CertificatesController@processCsvImport')->name('certificates.processCsvImport');
    Route::resource('certificates', 'CertificatesController');

    // Programmes
    Route::delete('programmes/destroy', 'ProgrammesController@massDestroy')->name('programmes.massDestroy');
    Route::post('programmes/parse-csv-import', 'ProgrammesController@parseCsvImport')->name('programmes.parseCsvImport');
    Route::post('programmes/process-csv-import', 'ProgrammesController@processCsvImport')->name('programmes.processCsvImport');
    Route::resource('programmes', 'ProgrammesController');

    // Enrolments Qualifications
    Route::delete('enrolments-qualifications/destroy', 'EnrolmentsQualificationsController@massDestroy')->name('enrolments-qualifications.massDestroy');
    Route::resource('enrolments-qualifications', 'EnrolmentsQualificationsController');
    Route::get('enrolments-qualifications/course-fees/{id}', 'EnrolmentsQualificationsController@getCourseFees')->name('enrolments-qualifications.getCourseFees');

    // Payment Sources
    Route::delete('payment-sources/destroy', 'PaymentSourcesController@massDestroy')->name('payment-sources.massDestroy');
    Route::resource('payment-sources', 'PaymentSourcesController');

    // Payments Qualifications
    Route::delete('payments-qualifications/destroy', 'PaymentsQualificationsController@massDestroy')->name('payments-qualifications.massDestroy');
    Route::resource('payments-qualifications', 'PaymentsQualificationsController');

    // Payments Individuals
    Route::delete('payments-individuals/destroy', 'PaymentsIndividualsController@massDestroy')->name('payments-individuals.massDestroy');
    Route::resource('payments-individuals', 'PaymentsIndividualsController');

    // Achievements
    Route::delete('achievements/destroy', 'AchievementsController@massDestroy')->name('achievements.massDestroy');
    Route::resource('achievements', 'AchievementsController');

    // Results Modules
    Route::delete('results-modules/destroy', 'ResultsModulesController@massDestroy')->name('results-modules.massDestroy');
    Route::post('results-modules/parse-csv-import', 'ResultsModulesController@parseCsvImport')->name('results-modules.parseCsvImport');
    Route::post('results-modules/process-csv-import', 'ResultsModulesController@processCsvImport')->name('results-modules.processCsvImport');
    Route::resource('results-modules', 'ResultsModulesController');

    // Support Funds
    Route::delete('support-funds/destroy', 'SupportFundsController@massDestroy')->name('support-funds.massDestroy');
    Route::resource('support-funds', 'SupportFundsController');

    // Facilitators
    Route::delete('facilitators/destroy', 'FacilitatorsController@massDestroy')->name('facilitators.massDestroy');
    Route::resource('facilitators', 'FacilitatorsController');

    // Venues
    Route::delete('venues/destroy', 'VenuesController@massDestroy')->name('venues.massDestroy');
    Route::resource('venues', 'VenuesController');

    // Admissions Edp
    Route::delete('admissions-edps/destroy', 'AdmissionsEdpController@massDestroy')->name('admissions-edps.massDestroy');
    Route::resource('admissions-edps', 'AdmissionsEdpController');

    // Payments Edp
    Route::delete('payments-edps/destroy', 'PaymentsEdpController@massDestroy')->name('payments-edps.massDestroy');
    Route::resource('payments-edps', 'PaymentsEdpController');

    // Awards
    Route::delete('awards/destroy', 'AwardsController@massDestroy')->name('awards.massDestroy');
    Route::post('awards/parse-csv-import', 'AwardsController@parseCsvImport')->name('awards.parseCsvImport');
    Route::post('awards/process-csv-import', 'AwardsController@processCsvImport')->name('awards.processCsvImport');
    Route::resource('awards', 'AwardsController');

    // Applicants Ada
    Route::delete('applicants-adas/destroy', 'ApplicantsAdaController@massDestroy')->name('applicants-adas.massDestroy');
    Route::resource('applicants-adas', 'ApplicantsAdaController');

    // Credits Funds Purposes
    Route::delete('credits-funds-purposes/destroy', 'CreditsFundsPurposesController@massDestroy')->name('credits-funds-purposes.massDestroy');
    Route::resource('credits-funds-purposes', 'CreditsFundsPurposesController');

    // Training Credits Individuals
    Route::delete('training-credits-individuals/destroy', 'TrainingCreditsIndividualsController@massDestroy')->name('training-credits-individuals.massDestroy');
    Route::resource('training-credits-individuals', 'TrainingCreditsIndividualsController');

    // Support Funds Individuals
    Route::delete('support-funds-individuals/destroy', 'SupportFundsIndividualsController@massDestroy')->name('support-funds-individuals.massDestroy');
    Route::resource('support-funds-individuals', 'SupportFundsIndividualsController');

    // Corporates
    Route::delete('corporates/destroy', 'CorporatesController@massDestroy')->name('corporates.massDestroy');
    Route::post('corporates/parse-csv-import', 'CorporatesController@parseCsvImport')->name('corporates.parseCsvImport');
    Route::post('corporates/process-csv-import', 'CorporatesController@processCsvImport')->name('corporates.processCsvImport');
    Route::resource('corporates', 'CorporatesController');

    // Memberships Corporates
    Route::delete('memberships-corporates/destroy', 'MembershipsCorporatesController@massDestroy')->name('memberships-corporates.massDestroy');
    Route::resource('memberships-corporates', 'MembershipsCorporatesController');

    // Payments Corporates
    Route::delete('payments-corporates/destroy', 'PaymentsCorporatesController@massDestroy')->name('payments-corporates.massDestroy');
    Route::resource('payments-corporates', 'PaymentsCorporatesController');

    // Training Credits Corporates
    Route::delete('training-credits-corporates/destroy', 'TrainingCreditsCorporatesController@massDestroy')->name('training-credits-corporates.massDestroy');
    Route::resource('training-credits-corporates', 'TrainingCreditsCorporatesController');

    // Support Funds Corporates
    Route::delete('support-funds-corporates/destroy', 'SupportFundsCorporatesController@massDestroy')->name('support-funds-corporates.massDestroy');
    Route::resource('support-funds-corporates', 'SupportFundsCorporatesController');

    // Qualifications App
    Route::delete('qualifications-apps/destroy', 'QualificationsAppController@massDestroy')->name('qualifications-apps.massDestroy');
    Route::post('qualifications-apps/parse-csv-import', 'QualificationsAppController@parseCsvImport')->name('qualifications-apps.parseCsvImport');
    Route::post('qualifications-apps/process-csv-import', 'QualificationsAppController@processCsvImport')->name('qualifications-apps.processCsvImport');
    Route::resource('qualifications-apps', 'QualificationsAppController');

    // Status App
    Route::delete('status-apps/destroy', 'StatusAppController@massDestroy')->name('status-apps.massDestroy');
    Route::resource('status-apps', 'StatusAppController');

    // Status Qualifications
    Route::delete('status-qualifications/destroy', 'StatusQualificationsController@massDestroy')->name('status-qualifications.massDestroy');
    Route::resource('status-qualifications', 'StatusQualificationsController');

    // Edp App
    Route::delete('edp-apps/destroy', 'EdpAppController@massDestroy')->name('edp-apps.massDestroy');
    Route::post('edp-apps/parse-csv-import', 'EdpAppController@parseCsvImport')->name('edp-apps.parseCsvImport');
    Route::post('edp-apps/process-csv-import', 'EdpAppController@processCsvImport')->name('edp-apps.processCsvImport');
    Route::resource('edp-apps', 'EdpAppController');

    // Corporates App
    Route::delete('corporates-apps/destroy', 'CorporatesAppController@massDestroy')->name('corporates-apps.massDestroy');
    Route::post('corporates-apps/parse-csv-import', 'CorporatesAppController@parseCsvImport')->name('corporates-apps.parseCsvImport');
    Route::post('corporates-apps/process-csv-import', 'CorporatesAppController@processCsvImport')->name('corporates-apps.processCsvImport');
    Route::resource('corporates-apps', 'CorporatesAppController');

    // Individuals App
    Route::delete('individuals-apps/destroy', 'IndividualsAppController@massDestroy')->name('individuals-apps.massDestroy');
    Route::post('individuals-apps/parse-csv-import', 'IndividualsAppController@parseCsvImport')->name('individuals-apps.parseCsvImport');
    Route::post('individuals-apps/process-csv-import', 'IndividualsAppController@processCsvImport')->name('individuals-apps.processCsvImport');
    Route::resource('individuals-apps', 'IndividualsAppController');

    // Ada App
    Route::delete('ada-apps/destroy', 'AdaAppController@massDestroy')->name('ada-apps.massDestroy');
    Route::post('ada-apps/parse-csv-import', 'AdaAppController@parseCsvImport')->name('ada-apps.parseCsvImport');
    Route::post('ada-apps/process-csv-import', 'AdaAppController@processCsvImport')->name('ada-apps.processCsvImport');
    Route::resource('ada-apps', 'AdaAppController');

    // Status Leads
    Route::delete('status-leads/destroy', 'StatusLeadsController@massDestroy')->name('status-leads.massDestroy');
    Route::resource('status-leads', 'StatusLeadsController');

    // Qualifications Req
    Route::delete('qualifications-reqs/destroy', 'QualificationsReqController@massDestroy')->name('qualifications-reqs.massDestroy');
    Route::post('qualifications-reqs/parse-csv-import', 'QualificationsReqController@parseCsvImport')->name('qualifications-reqs.parseCsvImport');
    Route::post('qualifications-reqs/process-csv-import', 'QualificationsReqController@processCsvImport')->name('qualifications-reqs.processCsvImport');
    Route::resource('qualifications-reqs', 'QualificationsReqController');

    // Edp Req
    Route::delete('edp-reqs/destroy', 'EdpReqController@massDestroy')->name('edp-reqs.massDestroy');
    Route::post('edp-reqs/parse-csv-import', 'EdpReqController@parseCsvImport')->name('edp-reqs.parseCsvImport');
    Route::post('edp-reqs/process-csv-import', 'EdpReqController@processCsvImport')->name('edp-reqs.processCsvImport');
    Route::resource('edp-reqs', 'EdpReqController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
