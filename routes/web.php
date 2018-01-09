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

    /*>>>>>>>>>>>>>>>>>>For Home Content<<<<<<<<<<<<<<<*/
    Route::get('/home/content/add-content', 'HomeContentController@addHomeContent');
    Route::post('/home/content/new-content', 'HomeContentController@saveHomeContent');
    Route::get('/home/content/manage-content', 'HomeContentController@manageHomeContent');
    Route::get('/home/content/view-content/{id}', 'HomeContentController@viewHomeContent');
    Route::get('/home/content/published-content/{id}', 'HomeContentController@publishedHomeContent');
    Route::get('/home/content/unpublished-content/{id}', 'HomeContentController@unpublishedHomeContent');
    Route::get('/home/content/edit-content/{id}', 'HomeContentController@editHomeContent');
    Route::post('/home/content/update-content', 'HomeContentController@updateHomeContent');
    Route::get('/home/content/delete-content/{id}', 'HomeContentController@deleteHomeContent');

    /*>>>>>>>>>>>>>>>>>>For Slider<<<<<<<<<<<<<<<*/
    Route::get('/home/slider/add-slider', 'SliderController@addSliderInfo');
    Route::post('/home/slider/new-slider', 'SliderController@saveSliderInfo');
    Route::get('/home/slider/manage-slider', 'SliderController@manageSliderInfo');
    Route::get('/home/slider/view-slider', 'SliderController@viewSliderInfo');
    Route::get('/home/slider/published-slider/{id}', 'SliderController@publishedSliderInfo');
    Route::get('/home/slider/unpublished-slider/{id}', 'SliderController@unpublishedSliderInfo');
    Route::get('/home/slider/edit-slider/{id}', 'SliderController@editSliderInfo');
    Route::post('/home/slider/update-slider', 'SliderController@updateSliderInfo');
    Route::get('/home/slider/delete-slider/{id}', 'SliderController@deleteSliderInfo');

    /*>>>>>>>>>>>>>>>>>>For Department<<<<<<<<<<<<<<<*/
    Route::get('/department/add-department', 'DepartmentController@addDepartmentForm');
    Route::post('/department/new-department', 'DepartmentController@saveDepartmentInfo');
    Route::get('/department/manage-department', 'DepartmentController@manageDepartmentInfo');
    Route::get('/department/published-department/{id}', 'DepartmentController@publishedDepartmentInfo');
    Route::get('/department/unpublished-department/{id}', 'DepartmentController@unpublishedDepartmentInfo');
    Route::get('/department/edit-department/{id}', 'DepartmentController@editDepartmentInfo');
    Route::post('/department/update-department', 'DepartmentController@updateDepartmentInfo');
    Route::get('/department/delete-department/{id}', 'DepartmentController@deleteDepartmentInfo');

    /*>>>>>>>>>>>>>>>>>>For SAC Members<<<<<<<<<<<<<<<*/
    Route::get('/committee/sac/add-sac-member', 'SACMemberController@addSACMemberForm');
    Route::post('/committee/sac/new-sac-member', 'SACMemberController@saveSACMemberInfo');
    Route::get('/committee/sac/manage-sac-member', 'SACMemberController@manageSACMemberInfo');
    Route::get('/committee/sac/view-sac-member/{id}', 'SACMemberController@viewSACMemberInfo');
    Route::get('/committee/sac/published-sac-member/{id}', 'SACMemberController@publishedSACMemberInfo');
    Route::get('/committee/sac/unpublished-sac-member/{id}', 'SACMemberController@unpublishedSACMemberInfo');
    Route::get('/committee/sac/edit-sac-member/{id}', 'SACMemberController@editSACMemberInfo');
    Route::post('/committee/sac/update-sac-member', 'SACMemberController@updateSACMemberInfo');
    Route::get('/committee/sac/delete-sac-member/{id}', 'SACMemberController@deleteSACMemberInfo');

    /*>>>>>>>>>>>>>>>>>>For QAC Members<<<<<<<<<<<<<<<*/
    Route::get('/committee/qac/add-qac-member', 'QACMemberController@addQACMemberForm');
    Route::post('/committee/qac/new-qac-member', 'QACMemberController@saveQACMemberInfo');
    Route::get('/committee/qac/manage-qac-member', 'QACMemberController@manageQACMemberInfo');
    Route::get('/committee/qac/published-qac-member/{id}', 'QACMemberController@publishedQACMemberInfo');
    Route::get('/committee/qac/unpublished-qac-member/{id}', 'QACMemberController@unpublishedQACMemberInfo');
    Route::get('/committee/qac/edit-qac-member/{id}', 'QACMemberController@editQACMemberInfo');
    Route::post('/committee/qac/update-qac-member', 'QACMemberController@updateQACMemberInfo');
    Route::get('/committee/qac/delete-qac-member/{id}', 'QACMemberController@deleteQACMemberInfo');

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

    /*>>>>>>>>>>>>>>>>>>For Gallery<<<<<<<<<<<<<<<*/
    Route::get('/gallery/add-gallery-file', 'GalleryController@addGalleryFileForm');
    Route::post('/gallery/new-gallery-file', 'GalleryController@saveGalleryFileInfo');
    Route::get('/gallery/manage-gallery-file', 'GalleryController@manageGalleryFileInfo');
    Route::get('/gallery/published-gallery-file/{id}', 'GalleryController@publishedGalleryFileInfo');
    Route::get('/gallery/unpublished-gallery-file/{id}', 'GalleryController@unpublishedGalleryFileInfo');
    Route::get('/gallery/edit-gallery-file/{id}', 'GalleryController@editGalleryFileInfo');
    Route::post('/gallery/update-gallery-file', 'GalleryController@updateGalleryFileInfo');
    Route::get('/gallery/delete-gallery-file/{id}', 'GalleryController@deleteGalleryFileInfo');

    /*>>>>>>>>>>>>>>>>>>For Executive Staff<<<<<<<<<<<<<<<*/
    Route::get('/staff/executive/add-executive-staff', 'StaffController@addExecutiveStaffForm');
    Route::post('/staff/executive/new-executive-staff', 'StaffController@saveExecutiveStaffInfo');
    Route::get('/staff/executive/manage-executive-staff', 'StaffController@manageExecutiveStaffInfo');
    Route::get('/staff/executive/published-executive-staff/{id}', 'StaffController@publishedExecutiveStaffInfo');
    Route::get('/staff/executive/unpublished-executive-staff/{id}', 'StaffController@unpublishedExecutiveStaffInfo');
    Route::get('/staff/executive/edit-executive-staff/{id}', 'StaffController@editExecutiveStaffInfo');
    Route::post('/staff/executive/update-executive-staff', 'StaffController@updateExecutiveStaffInfo');
    Route::get('/staff/executive/delete-executive-staff/{id}', 'StaffController@deleteExecutiveStaffInfo');

    /*>>>>>>>>>>>>>>>>>>For Office Staff<<<<<<<<<<<<<<<*/
    Route::get('/staff/office/add-office-staff', 'StaffController@addOfficeStaffForm');
    Route::post('/staff/office/new-office-staff', 'StaffController@saveOfficeStaffInfo');
    Route::get('/staff/office/manage-office-staff', 'StaffController@manageOfficeStaffInfo');
    Route::get('/staff/office/published-office-staff/{id}', 'StaffController@publishedOfficeStaffInfo');
    Route::get('/staff/office/unpublished-office-staff/{id}', 'StaffController@unpublishedOfficeStaffInfo');
    Route::get('/staff/office/edit-office-staff/{id}', 'StaffController@editOfficeStaffInfo');
    Route::post('/staff/office/update-office-staff', 'StaffController@updateOfficeStaffInfo');
    Route::get('/staff/office/delete-office-staff/{id}', 'StaffController@deleteOfficeStaffInfo');

});