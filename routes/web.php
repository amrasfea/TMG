<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[LoginController::class, 'manageLoginview']);

Route::get('/ForgotPassword',[LoginController::class, 'manageForgotPasswordView']);

Route::get('/newRegister',[RegisterController::class, 'RegisterView']);

Route::get('/PlatinumHome',[LoginController::class, 'PlatinumHomePage']);

Route::get('/MentorHome',[LoginController::class, 'MentorHomePage']);

Route::get('/StaffHome',[LoginController::class, 'StaffHomePage']);

Route::get('/EditRegistration',[RegisterController::class, 'EditRegisterView']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::get('/FocusBlock',[ManageWeeklyFocusController::class, 'FocusBlockView'] );

Route::get('/AdminBlock',[ManageWeeklyFocusController::class, 'AdminBlockView']);

Route::get('/RecoveryBlock',[ManageWeeklyFocusController::class, 'RecoveryBlockView']);

Route::get('/SocialBlock',[ManageWeeklyFocusController::class, 'SocialBlockView']);

Route::get('/WeeklyFocusReport',[ManageWeeklyFocusController::class, 'GenerateWeeklyFocusReport']);

Route::get('/FocusDate',[ManageWeeklyFocusController::class, 'FocusDateView']);

Route::get('/WeeklyBlock',[ManageWeeklyFocusController::class, 'WeeklyBlockView']);

Route::get('/WeeklyFocusInfo',[ManageWeeklyFocusController::class, 'WeeklyFocusInfoView']);

Route::get('/AllFocusDate',[ManageWeeklyFocusController::class, 'AllPlatinumFocusDateView']);

Route::get('/AllWeeklyBlock',[ManageWeeklyFocusController::class, 'AllPlatinumWeeklyBlockView']);

Route::get('/AllWeeklyFocusInfo',[ManageWeeklyFocusController::class, 'AllPlatinumWeeklyFocusInfoView']);

Route::get('/PlatinumFocusDate',[ManageWeeklyFocusController::class, 'PlatinumFocusDateView']);

Route::get('/PlatinumWeeklyBlock',[ManageWeeklyFocusController::class, 'PlatinumWeeklyBlockView']);

Route::get('/PlatinumWeeklyFocusInfo',[ManageWeeklyFocusController::class, 'PlatinumWeeklyFocusInfoView']);

Route::get('/ThesisReport',[ManageDraftThesisPerformanceController::class, 'GenerateDraftThesisPErformanceReport']);

Route::get('/CompletionDate',[ManageDraftThesisPerformanceController::class, 'DraftCompletionDateView']);

Route::get('/DaysPrepare',[ManageDraftThesisPerformanceController::class, 'DraftDaystoPrepareView']);

Route::get('/NumView',[ManageDraftThesisPerformanceController::class, 'DraftNumView']);

Route::get('/StartDate',[ManageDraftThesisPerformanceController::class, 'DraftStartDateView']);

Route::get('/TotalPage',[ManageDraftThesisPerformanceController::class, 'DraftTotalPageView']);

Route::get('/ThesisTitle',[ManageDraftThesisPerformanceController::class, 'ThesisTitleView']);

Route::get('/AllCompletionDate',[ManageDraftThesisPerformanceController::class, 'AllPlatinumDraftCompletionDateView']);

Route::get('/AllDaysPrepare',[ManageDraftThesisPerformanceController::class, 'AllPlatinumDraftDaystoPrepareView']);

Route::get('/AllNumView',[ManageDraftThesisPerformanceController::class, 'AllPlatinumDraftNumView']);

Route::get('/AllStartDate',[ManageDraftThesisPerformanceController::class, 'AllPlatinumDraftStartDateView']);

Route::get('/AllTotalPage',[ManageDraftThesisPerformanceController::class, 'AllPlatinumDraftTotalPageView']);

Route::get('/AllThesisTitle',[ManageDraftThesisPerformanceController::class, 'AllPlatinumThesisTitleView']);

Route::get('/PlatinumCompletionDate',[ManageDraftThesisPerformanceController::class, 'PlatinumDraftCompletionDateView']);

Route::get('/PlatinumDaysPrepare',[ManageDraftThesisPerformanceController::class, 'PlatinumDraftDaystoPrepareView']);

Route::get('/PlatinumNumView',[ManageDraftThesisPerformanceController::class, 'PlatinumDraftNumView']);

Route::get('/PlatinumStartDate',[ManageDraftThesisPerformanceController::class, 'PlatinumDraftStartDateView']);

Route::get('/PlatinumTotalPage',[ManageDraftThesisPerformanceController::class, 'PlatinumDraftTotalPageView']);

Route::get('/PlatinumThesisTitle',[ManageDraftThesisPerformanceController::class, 'PlatinumThesisTitleView']);








