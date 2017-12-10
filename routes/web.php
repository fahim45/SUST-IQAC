<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'FrontEndController@index');
Route::get('/notice/{id}', 'FrontEndController@noticeBoard');
Route::get('/sac-members', 'FrontEndController@sacMembers');
Route::get('/qac-members', 'FrontEndController@qacMembers');
Route::get('/iqac-events-list', 'FrontEndController@iqacEventList');
Route::get('/poe-events-list', 'FrontEndController@poeEventList');
Route::get('/recent-activities', 'FrontEndController@recentActivities');
Route::get('/gallery', 'FrontEndController@gallery');
Route::get('/executive-staff', 'FrontEndController@executiveStaff');
Route::get('/office-staff', 'FrontEndController@officeStaff');
Route::get('/manual', 'FrontEndController@manual');
Route::get('/documents', 'FrontEndController@documents');
Route::get('/contact', 'FrontEndController@contact');
Route::post('/contact/send-mail', 'FrontEndController@sendMail');
Route::get('/our-mission', 'FrontEndController@ourMission');
Route::get('/our-vision', 'FrontEndController@ourVision');
Route::get('/our-objectives', 'FrontEndController@ourObjectives');


Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');


Route::group(['middleware'=>'AuthenticateMiddleware'],function (){
    /*>>>>>>>>>>>>>>>>>>For Events<<<<<<<<<<<<<<<*/
    Route::get('/events/add-events', 'EventController@addEventForm');
    Route::post('/events/new-events', 'EventController@saveEventInfo');
    Route::get('/events/manage-events', 'EventController@manageEventInfo');
    Route::get('/events/view-events/{id}', 'EventController@viewEventInfo');
    Route::get('/events/published-events/{id}', 'EventController@publishedEventInfo');
    Route::get('/events/unpublished-events/{id}', 'EventController@unpublishedEventInfo');
    Route::get('/events/edit-events/{id}', 'EventController@editEventInfo');
    Route::post('/events/update-events', 'EventController@updateEventInfo');
    Route::get('/events/delete-events/{id}', 'EventController@deleteEventInfo');

    /*>>>>>>>>>>>>>>>>>>For Activity<<<<<<<<<<<<<<<*/
    Route::get('/activities/add-activities', 'ActivityController@addActivityForm');
    Route::post('/activities/new-activities', 'ActivityController@saveActivityInfo');
    Route::get('/activities/manage-activities', 'ActivityController@manageActivityInfo');
    Route::get('/activities/view-activities/{id}', 'ActivityController@viewActivityInfo');
    Route::get('/activities/published-activities/{id}', 'ActivityController@publishedActivityInfo');
    Route::get('/activities/unpublished-activities/{id}', 'ActivityController@unpublishedActivityInfo');
    Route::get('/activities/edit-activities/{id}', 'ActivityController@editActivityInfo');
    Route::post('/activities/update-activities', 'ActivityController@updateActivityInfo');
    Route::get('/activities/delete-activities/{id}', 'ActivityController@deleteActivityInfo');

    /*>>>>>>>>>>>>>>>>>>For Notice Board<<<<<<<<<<<<<<<*/
    Route::get('/notice-board/add-notice-board', 'NoticeBoardController@addNoticeBoardForm');
    Route::post('/notice-board/new-notice-board', 'NoticeBoardController@saveNoticeBoardInfo');
    Route::get('/notice-board/manage-notice-board', 'NoticeBoardController@manageNoticeBoardInfo');
    Route::get('/notice-board/view-notice-board/{id}', 'NoticeBoardController@viewNoticeBoardInfo');
    Route::get('/notice-board/published-notice-board/{id}', 'NoticeBoardController@publishedNoticeBoardInfo');
    Route::get('/notice-board/unpublished-notice-board/{id}', 'NoticeBoardController@unpublishedNoticeBoardInfo');
    Route::get('/notice-board/edit-notice-board/{id}', 'NoticeBoardController@editNoticeBoardInfo');
    Route::post('/notice-board/update-notice-board', 'NoticeBoardController@updateNoticeBoardInfo');
    Route::get('/notice-board/delete-notice-board/{id}', 'NoticeBoardController@deleteNoticeBoardInfo');

    /*>>>>>>>>>>>>>>>>>>For Download<<<<<<<<<<<<<<<*/
    Route::get('/download/add-file', 'DownloadController@addFileForm');
    Route::post('/download/new-file', 'DownloadController@saveFileInfo');
    Route::get('/download/manage-file', 'DownloadController@manageFileInfo');
    Route::get('/download/published-file/{id}', 'DownloadController@publishedFileInfo');
    Route::get('/download/unpublished-file/{id}', 'DownloadController@unpublishedFileInfo');
    Route::get('/download/edit-file/{id}', 'DownloadController@editFileInfo');
    Route::post('/download/update-file', 'DownloadController@updateFileInfo');
    Route::get('/download/delete-file/{id}', 'DownloadController@deleteFileInfo');

    /*>>>>>>>>>>>>>>>>>>For Staff<<<<<<<<<<<<<<<*/
    Route::get('/staff/executive/add-executive-staff', 'StaffController@addExecutiveStaffForm');
    Route::post('/staff/executive/new-executive-staff', 'StaffController@saveExecutiveStaffInfo');
    Route::get('/staff/executive/manage-executive-staff', 'StaffController@manageExecutiveStaffInfo');
    Route::get('/staff/executive/published-executive-staff/{id}', 'StaffController@publishedExecutiveStaffInfo');
    Route::get('/staff/executive/unpublished-executive-staff/{id}', 'StaffController@unpublishedExecutiveStaffInfo');
    Route::get('/staff/executive/edit-executive-staff/{id}', 'StaffController@editExecutiveStaffInfo');
    Route::post('/staff/executive/update-executive-staff', 'StaffController@updateExecutiveStaffInfo');
    Route::get('/staff/executive/delete-executive-staff/{id}', 'StaffController@deleteExecutiveStaffInfo');

});