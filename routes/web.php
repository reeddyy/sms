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
    Route::resource('modules', 'ModulesController');

    // Digital Modules
    Route::delete('digital-modules/destroy', 'DigitalModulesController@massDestroy')->name('digital-modules.massDestroy');
    Route::resource('digital-modules', 'DigitalModulesController');

    // Courses
    Route::delete('courses/destroy', 'CoursesController@massDestroy')->name('courses.massDestroy');
    Route::resource('courses', 'CoursesController');

    // Officers
    Route::delete('officers/destroy', 'OfficersController@massDestroy')->name('officers.massDestroy');
    Route::post('officers/parse-csv-import', 'OfficersController@parseCsvImport')->name('officers.parseCsvImport');
    Route::post('officers/process-csv-import', 'OfficersController@processCsvImport')->name('officers.processCsvImport');
    Route::resource('officers', 'OfficersController');

    // Grades
    Route::delete('grades/destroy', 'GradesController@massDestroy')->name('grades.massDestroy');
    Route::resource('grades', 'GradesController');

    // Cf Purposes
    Route::delete('cf-purposes/destroy', 'CfPurposesController@massDestroy')->name('cf-purposes.massDestroy');
    Route::resource('cf-purposes', 'CfPurposesController');

    // Member Class
    Route::delete('member-classes/destroy', 'MemberClassController@massDestroy')->name('member-classes.massDestroy');
    Route::resource('member-classes', 'MemberClassController');

    // Status
    Route::delete('statuses/destroy', 'StatusController@massDestroy')->name('statuses.massDestroy');
    Route::resource('statuses', 'StatusController');

    // Memberships Individuals
    Route::delete('memberships-individuals/destroy', 'MembershipsIndividualsController@massDestroy')->name('memberships-individuals.massDestroy');
    Route::resource('memberships-individuals', 'MembershipsIndividualsController');

    // Tc Individuals
    Route::delete('tc-individuals/destroy', 'TcIndividualsController@massDestroy')->name('tc-individuals.massDestroy');
    Route::resource('tc-individuals', 'TcIndividualsController');

    // Certificates
    Route::delete('certificates/destroy', 'CertificatesController@massDestroy')->name('certificates.massDestroy');
    Route::resource('certificates', 'CertificatesController');

    // Programmes
    Route::delete('programmes/destroy', 'ProgrammesController@massDestroy')->name('programmes.massDestroy');
    Route::resource('programmes', 'ProgrammesController');

    // Enrolments Qualifications
    Route::delete('enrolments-qualifications/destroy', 'EnrolmentsQualificationsController@massDestroy')->name('enrolments-qualifications.massDestroy');
    Route::resource('enrolments-qualifications', 'EnrolmentsQualificationsController');

    // Payment Sources
    Route::delete('payment-sources/destroy', 'PaymentSourcesController@massDestroy')->name('payment-sources.massDestroy');
    Route::resource('payment-sources', 'PaymentSourcesController');

    // Payments Qualifications
    Route::delete('payments-qualifications/destroy', 'PaymentsQualificationsController@massDestroy')->name('payments-qualifications.massDestroy');
    Route::resource('payments-qualifications', 'PaymentsQualificationsController');

    // Payments Individuals
    Route::delete('payments-individuals/destroy', 'PaymentsIndividualsController@massDestroy')->name('payments-individuals.massDestroy');
    Route::resource('payments-individuals', 'PaymentsIndividualsController');

    // Results Modules
    Route::delete('results-modules/destroy', 'ResultsModulesController@massDestroy')->name('results-modules.massDestroy');
    Route::resource('results-modules', 'ResultsModulesController');

    // Results Digital Modules
    Route::delete('results-digital-modules/destroy', 'ResultsDigitalModulesController@massDestroy')->name('results-digital-modules.massDestroy');
    Route::resource('results-digital-modules', 'ResultsDigitalModulesController');

    // Support Funds
    Route::delete('support-funds/destroy', 'SupportFundsController@massDestroy')->name('support-funds.massDestroy');
    Route::resource('support-funds', 'SupportFundsController');

    // Sf Individuals
    Route::delete('sf-individuals/destroy', 'SfIndividualsController@massDestroy')->name('sf-individuals.massDestroy');
    Route::resource('sf-individuals', 'SfIndividualsController');

    // Facilitators
    Route::delete('facilitators/destroy', 'FacilitatorsController@massDestroy')->name('facilitators.massDestroy');
    Route::resource('facilitators', 'FacilitatorsController');

    // Venues
    Route::delete('venues/destroy', 'VenuesController@massDestroy')->name('venues.massDestroy');
    Route::resource('venues', 'VenuesController');

    // Payments Edp
    Route::delete('payments-edps/destroy', 'PaymentsEdpController@massDestroy')->name('payments-edps.massDestroy');
    Route::resource('payments-edps', 'PaymentsEdpController');

    // Awards
    Route::delete('awards/destroy', 'AwardsController@massDestroy')->name('awards.massDestroy');
    Route::resource('awards', 'AwardsController');

    // Applicants Ada
    Route::delete('applicants-adas/destroy', 'ApplicantsAdaController@massDestroy')->name('applicants-adas.massDestroy');
    Route::resource('applicants-adas', 'ApplicantsAdaController');

    // Admissions Edp
    Route::delete('admissions-edps/destroy', 'AdmissionsEdpController@massDestroy')->name('admissions-edps.massDestroy');
    Route::resource('admissions-edps', 'AdmissionsEdpController');
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
