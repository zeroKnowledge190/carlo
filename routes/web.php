<?php

use Illuminate\Support\Facades\Input;
use App\Http\Controllers\MailController;
use App\Admin;
use App\User;

Route::get('/', function(){
	return redirect('/');
});

// Site
Route::get('/', 'Carlo\CarloFaceController@index');
Route::get('/back-end-panel', 'Carlo\CarloFaceController@backEndPanel');
Route::get('/landing-face', 'Carlo\LandingFaceController@landingPage')->middleware('authenticated');
Route::get('/login-first', 'Carlo\LandingFaceController@loginFirst');

// Route::get('/', 'Filimon\FilFaceController@index');
// Route::get('/', 'RedDropFace\RedDropFaceController@index');
Route::get('/admin-office', 'RedDropFace\RedDropFaceController@indexAdmin');

// Contents
Route::get('/manage-contents', 'Filimon\ManageContentController@index');
Route::get('/contents-datatables', 'Filimon\ManageContentController@contentsDtAjax');

// Manage Subscriber
Route::get('/manage-subscribers', 'Filimon\ManageSubscribersController@index');
Route::get('/subscribers-datatables', 'Filimon\ManageSubscribersController@subscribersDtAjax');

// Register User
Route::post('/register-user', 'Filimon\RegisterUserController@create');
Route::post('/register-carlo-user', 'Filimon\RegisterUserController@createUser');

// Manage Questions
Route::get('/questions', 'Carlo\QuestionsController@index')->middleware('authenticated');
Route::get('/questions-datatables', 'Carlo\QuestionsController@questionsDtAjax')->middleware('authenticated');
Route::get('/questions-form', 'Carlo\QuestionsController@questionsForm');
Route::get('/view-questions-form/{id}', 'Carlo\QuestionsController@viewQuestionForm');
Route::post('/save-questions', 'Carlo\QuestionsController@saveQuestions');
Route::post('/save_upload_question_files', 'Carlo\QuestionsController@saveUploadQuestionFiles');

// Manage Opinion
Route::get('/opinions', 'Carlo\OpinionsController@index')->middleware('authenticated');
Route::get('/opinions-datatables', 'Carlo\OpinionsController@opinionsDtAjax')->middleware('authenticated');
Route::get('/opinions-form', 'Carlo\OpinionsController@opinionsForm');
Route::get('/view-opinions-form/{id}', 'Carlo\OpinionsController@viewOpinionsForm');
Route::post('/save-opinions', 'Carlo\OpinionsController@saveOpinions');
Route::post('/save_upload_opinion_files', 'Carlo\OpinionsController@saveUploadOpinionFiles');

// Manage Requisition
Route::get('/requisitions', 'Carlo\RequisitionsController@index')->middleware('authenticated');
Route::get('/requisitions-datatables', 'Carlo\RequisitionsController@requisitionsDtAjax')->middleware('authenticated');
Route::get('/requisitions-form', 'Carlo\RequisitionsController@requisitionsForm');
Route::get('/view-requisitions-form/{id}', 'Carlo\RequisitionsController@viewRequisitionsForm');
Route::post('/save-requisitions', 'Carlo\RequisitionsController@saveRequisitions');
Route::post('/save_upload_requisition_files', 'Carlo\RequisitionsController@saveUploadRequisitionFiles');

// Manage Petition
Route::get('/petitions', 'Carlo\PetitionsController@index')->middleware('authenticated');
Route::get('/petitions-datatables', 'Carlo\PetitionsController@petitionsDtAjax')->middleware('authenticated');
Route::get('/petitions-form', 'Carlo\PetitionsController@petitionsForm');
Route::get('/view-petitions-form/{id}', 'Carlo\PetitionsController@viewPetitionsForm');
Route::post('/save-petitions', 'Carlo\PetitionsController@savePetitions');
Route::post('/save_upload_petition_files', 'Carlo\PetitionsController@saveUploadPetitionFiles');

// Manage Application
Route::get('/applications', 'Carlo\ApplicationsController@index')->middleware('authenticated');
Route::get('/applications-datatables', 'Carlo\ApplicationsController@applicationsDtAjax')->middleware('authenticated');
Route::get('/applications-form', 'Carlo\ApplicationsController@applicationsForm');
Route::get('/view-applications-form/{id}', 'Carlo\ApplicationsController@viewApplicationsForm');
Route::post('/save-applications', 'Carlo\ApplicationsController@saveApplications');
Route::post('/save_upload_application_files', 'Carlo\ApplicationsController@saveUploadApplicationFiles');

// Manage Survey
Route::get('/surveys', 'Carlo\SurveysController@index')->middleware('authenticated');
Route::get('/surveys-datatables', 'Carlo\SurveysController@surveysDtAjax')->middleware('authenticated');
Route::get('/survey-form', 'Carlo\SurveysController@surveyForm');
Route::get('/view-surveys-form/{id}', 'Carlo\SurveysController@viewSurveysForm');
Route::post('/save-surveys', 'Carlo\SurveysController@saveSurveys');
Route::post('/save_upload_survey_files', 'Carlo\SurveysController@saveUploadSurveyFiles');

// List of Files
Route::get('/list-of-files', 'Carlo\ManageFilesController@index')->middleware('authenticated');
Route::get('/files-datatables', 'Carlo\ManageFilesController@filesDtAjax');
Route::get('/edit-files-form/{fileIdNo}', 'Carlo\ManageFilesController@editFilesForm');
Route::post('/save-edit-files/{fileIdNo}', 'Carlo\ManageFilesController@saveEditFiles');

// List of Entities
Route::get('/list-of-entities', 'Carlo\ManageEntitiesController@index')->middleware('authenticated');
Route::get('/add_entity', 'Carlo\ManageEntitiesController@addEntityForm')->middleware('authenticated');
Route::post('/save_add_entity', 'Carlo\ManageEntitiesController@saveEntity');
Route::get('/entities-datatables', 'Carlo\ManageEntitiesController@entitiesDtAjax');
Route::get('/edit-entity/{entIdNo}', 'Carlo\ManageEntitiesController@editEntityForm');
Route::post('/save_edit_entity/{entIdNo}', 'Carlo\ManageEntitiesController@saveEditEntity');
Route::get('/delete-entity/{entIdNo}', 'Carlo\ManageEntitiesController@deleteEntityForm');
Route::get('/save_delete_entity/{entIdNo}', 'Carlo\ManageEntitiesController@saveDeleteEntity');

// Manage Jobs
Route::get('/manage-jobs', 'Recruitment\ManageJobsController@index')->middleware('authenticated');
Route::get('/jobs-datatables', 'Recruitment\ManageJobsController@jobsDtAjax');
Route::post('/add-job', 'Recruitment\ManageJobsController@addJob')->middleware('authenticated');
Route::post('/edit-job', 'Recruitment\ManageJobsController@editJob')->middleware('authenticated');
Route::post('/delete-job', 'Recruitment\ManageJobsController@deleteJob')->middleware('authenticated');

// Industry and Skill Filters
Route::post('/skill_filters', 'Filters\FiltersController@skillFilters');

// Manage Users
Route::get('/manage-users', 'RedDropOffice\ManageUsersController@index')->middleware('authenticated');
Route::get('/users-datatables', 'RedDropOffice\ManageUsersController@usersDtAjax')->middleware('authenticated');
Route::post('/search-users', 'RedDropOffice\ManageUsersController@searchUsers')->middleware('authenticated');
Route::post('/users-datatables', 'RedDropOffice\ManageUsersController@usersDtAjax')->middleware('authenticated');
Route::post('/edit-users', 'RedDropOffice\ManageUsersController@editUsers')->middleware('authenticated');
Route::post('/delete-users', 'RedDropOffice\ManageUsersController@deleteUsers')->middleware('authenticated');

// Manage Profile, Avatar and Documents
Route::get('/view-profile', 'RedDropOffice\ManageProfileController@viewProfile')->middleware('authenticated');
Route::get('/update-profile-page', 'RedDropOffice\ManageProfileController@updateProfilePage')->middleware('authenticated');
Route::post('/save-updated-profile', 'RedDropOffice\ManageProfileController@saveUpdatedProfile')->middleware('authenticated');
Route::post('/rd-edit-avatar', 'RedDropOffice\ManageProfileController@editAvatar')->middleware('authenticated');
Route::get('/list-of-documents', 'RedDropOffice\ManageProfileController@listOfDocuments');
Route::post('/rd-add-documents', 'RedDropOffice\ManageProfileController@addDocuments')->middleware('authenticated');
Route::post('/rd-edit-documents', 'RedDropOffice\ManageProfileController@editDocuments')->middleware('authenticated');
Route::post('/rd-delete-documents', 'RedDropOffice\ManageProfileController@deleteDocuments')->middleware('authenticated');
Route::get('/documents-datatables', 'RedDropOffice\ManageProfileController@documentsDtAjax')->middleware('authenticated');

// Dasboard
Route::get('/dashboard', 'UserController@dashboard')->middleware('authenticated');
Route::get('/preferences', 'UserController@full_profile');
Route::post('/preferences', 'UserController@update_avatar');

// Check email in Rergistration
Route::post('/check-email', 'CheckEmailController@emailHandler');
Route::post('/check-client-email', 'CheckEmailController@clientEmailHandler');
Route::post('/checkCredentials', 'CheckCredsController@credentialsHandler');

// Count Records and Notification
Route::get('/count-members-notifications', 'Members\CountMembersController@countMembersNotifications')->middleware('authenticated');
Route::get('/drop-down-list-of-members-notifications', 'Members\CountMembersController@dropDownListOfMembers')->middleware('authenticated');
Route::post('/seen-members-registrations/{id}', 'Members\CountMembersController@seenMembersRegistrations')->middleware('authenticated');
Route::post('/save-accepted-members', 'Members\CountMembersController@saveAcceptedMembers')->middleware('authenticated');

// Preferences
Route::get('/goToChangeAvatar', 'UserController@goToChangeAvatar');
Route::get('/profile', 'UserController@profile');

// Update Profile
Route::get('/goToEditProfile', 'UserController@edit_profile');
Route::post('/update_user', 'UserController@update_user')->middleware('authenticated');

// Update Username and Password
Route::get('/update-username-and-password', 'UserController@editUsernamePassword')->middleware('authenticated');
Route::post('/save-updated-username-and-password', 'UserController@saveUpdatedUsernamePassword')->middleware('authenticated');

// Route::get('/upload-avatar', 'UserController@profile');
Route::post('/upload-avatar', 'UserController@update_avatar')->middleware('authenticated');

// Users and Admin 
Route::prefix('admin')->group(function() {
// Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
// Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

// Users 
Route::get('/list-of-users', 'Auth\AdminPreferencesController@listOfUsers')->middleware('authenticated');
Route::post('/save-edited-users', 'Auth\AdminPreferencesController@saveEditedUsers')->middleware('authenticated');
Route::post('/delete-users', 'Auth\AdminPreferencesController@deleteUsers')->middleware('authenticated');

// Admin Preferences
Route::get('/admin_dashboard', 'Auth\AdminPreferencesController@index')->middleware('authenticated');
Route::get('/admin_skills_page', 'Auth\AdminPreferencesController@addSkillsPage')->middleware('authenticated');
Route::post('/admin-add-skills', 'Auth\AdminPreferencesController@addSkills')->middleware('authenticated');
Route::get('/list-of-skills', 'Auth\AdminPreferencesController@listOfSkills')->middleware('authenticated');
Route::get('/list-of-services-details', 'Auth\AdminPreferencesController@listOfServicesDetails')->middleware('authenticated');
Route::post('/save-edited-skills', 'Auth\AdminPreferencesController@saveEditedSkills')->middleware('authenticated');
Route::post('/delete-skill-service', 'Auth\AdminPreferencesController@deleteSkills')->middleware('authenticated');

// Create Client Account
Route::post('/create-client-account', 'Transactions\BtTransactionsController@createClientAccount');

// Count Transactions and Notifications
Route::get('/count-book-notifications', 'Transactions\CountBookingsController@countBookNotifications')->middleware('authenticated');
Route::get('/drop-down-list-of-notifications', 'Transactions\CountBookingsController@dropDownListOfBookings')->middleware('authenticated');

Route::get('/booking-per-customer/{id}', 'Transactions\CountBookingsController@bookingPerCustomer')->middleware('authenticated');
Route::post('/read-customer-booking/{id}', 'Transactions\CountBookingsController@readCustomerBooking')->middleware('authenticated');
Route::post('/save-accepted-booking', 'Transactions\CountBookingsController@saveAcceptedBooking')->middleware('authenticated');

//Count Customer Notifications
Route::get('/cust-count-book-notifications', 'Transactions\CountBookingsController@customerCountBookNotifications')->middleware('authenticated');
Route::get('/cust-drop-down-list-of-notifications', 'Transactions\CountBookingsController@customerDropDownListOfBookings')->middleware('authenticated');
Route::post('/cust-read-customer-booking/{id}', 'Transactions\CountBookingsController@custReadCustomerBooking')->middleware('authenticated');
Route::post('/cust-save-accepted-booking', 'Transactions\CountBookingsController@custSaveAcceptedBooking')->middleware('authenticated');

// Forgot Password
Route::post('/password-email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email_reset');
Route::get('/forgot-password', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/reset-forgot-password', 'Auth\ResetPasswordController@reset');
Route::post('/reset-forgot-password/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

// Mail
// Route::get('email', [App\Http\Controllers\MailController::class, 'mailView'])->name('mailView');
// Route::post('/send-mail', [MailController::class, 'mailSend'])->name('mailSend');

Route::get('/mail', 'MailController@mailView');
Route::post('/send-mail', 'MailController@mailSend')->name('mailSend');

// Carlo Send Mails
Route::get('/question-mail', 'QuestionMailController@questionMailView');
Route::post('/question-send-mail', 'QuestionMailController@questionMailSend')->name('questionMailSend');

Route::get('/opinion-mail', 'OpinionMailController@opinionMailView');
Route::post('/opinion-send-mail', 'OpinionMailController@opinionMailSend')->name('opinionMailSend');

Route::get('/requisition-mail', 'RequisitionMailController@requisitionMailView');
Route::post('/requisition-send-mail', 'RequisitionMailController@requisitionMailSend')->name('requisitionMailSend');

Route::get('/petition-mail', 'PetitionMailController@petitionMailView');
Route::post('/petition-send-mail', 'PetitionMailController@petitionMailSend')->name('petitionMailSend');

Route::get('/application-mail', 'ApplicationMailController@applicationMailView');
Route::post('/application-send-mail', 'ApplicationMailController@applicationMailSend')->name('applicationMailSend');

Route::get('/application-mail', 'ApplicationMailController@applicationMailView');
Route::post('/application-send-mail', 'ApplicationMailController@applicationMailSend')->name('applicationMailSend');

Route::get('/survey-mail', 'SurveyMailController@surveyMailView');
Route::post('/survey-send-mail', 'SurveyMailController@surveyMailSend')->name('surveyMailSend');

Auth::routes();






