<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
// ====start-frontend======
use App\Http\Controllers\IndexController;
use App\Http\Controllers\FrontendController;

// ====end-frontend========


// =======start-backend===========
use App\Http\Controllers\BannerSectionController;
use App\Http\Controllers\AboutAdminController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\CommentController;

// =======end-backend=============
// ========================

// ========start-frontend-routes============
Route::get('/',[IndexController::class,'index'])->name('frontend.home');

Route::get('/frontend-about',[FrontendController::class,'about'])->name('frontend.about');
Route::get('/services',[FrontendController::class,'services'])->name('frontend.services');
Route::get('/view-services/{id}',[FrontendController::class,'services_view'])->name('view.services');
Route::get('/portfolio',[FrontendController::class,'portfolio'])->name('frontend.portfolio');
Route::get('/view-portfolio/{id}',[FrontendController::class,'view_portfolio'])->name('view.portfolio');
Route::get('/team-members',[FrontendController::class,'team_members'])->name('frontend.team');
Route::get('/blog',[FrontendController::class,'blog'])->name('frontend.blog');
Route::get('/view-blog/{id}',[FrontendController::class,'view_blog'])->name('view.blog');

// Route::get('/contact',[FrontendController::class,'contact'])->name('frontend.contact');


// ==========end-frontend-routes============
Auth::routes();
Route::get('/admins', function () {
    return view('auth.login');
});
// Route::get('/register', function () {
//     return view('auth.login');
// });
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'],function(){
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
});
// ===================backend-routes=====================
// ==============start-banner-routes================
Route::get('/banner',[BannerSectionController::class,'banner'])->name('home.banner');
Route::get('/add-banner',[BannerSectionController::class,'add_banner'])->name('home.add_banner');
Route::post('/store-banner',[BannerSectionController::class,'store_banner'])->name('home.store_banner');
Route::get('/banner-status{bannerSection}',[BannerSectionController::class,'change_status']);
Route::get('/edit-banner/{id}',[BannerSectionController::class,'edit_banner'])->name('edit.banner');
Route::post('/update-banner/{id}',[BannerSectionController::class,'update_banner'])->name('update.banner');
Route::get('/delete-banner/{id}',[BannerSectionController::class,'delete_banner'])->name('delete.banner');
// ==============end-banner-routes================

// ==============start-about-routes================
Route::get('/about',[AboutAdminController::class,'about'])->name('about');
Route::get('/add-about',[AboutAdminController::class,'add_about'])->name('add_about');
Route::post('/store-about',[AboutAdminController::class,'store_about'])->name('store_about');
Route::get('/about-status{aboutModel}',[AboutAdminController::class,'change_status']);
Route::get('/edit-about/{id}',[AboutAdminController::class,'edit_about'])->name('edit.about');
Route::post('/update-about/{id}',[AboutAdminController::class,'update_about'])->name('update.about');
Route::get('/delete-about/{id}',[AboutAdminController::class,'delete_about'])->name('delete.about');
// ==============end-about-routes================

// ==============start-team-members-routes================
Route::get('/team',[TeamController::class,'team'])->name('team');
Route::get('/add-team',[TeamController::class,'add_team'])->name('add.team');
Route::post('/store-team',[TeamController::class,'store_team'])->name('store.team');
Route::get('/team-status{team}',[TeamController::class,'change_status']);
Route::get('/edit-team/{id}',[TeamController::class,'edit_team'])->name('edit.team');
Route::post('/update-team/{id}',[TeamController::class,'update_team'])->name('update.team');
Route::get('/delete-team/{id}',[TeamController::class,'delete_team'])->name('delete.team');
// ==============end-team-members-routes================

// ==============start-services-routes==============
Route::get('/admin-services',[ServicesController::class,'services'])->name('services');
Route::get('/add-services',[ServicesController::class,'add_services'])->name('add.services');
Route::post('/store-services',[ServicesController::class,'store_services'])->name('store.services');
Route::get('/services-status{services}',[ServicesController::class,'change_status']);
Route::get('/edit-services/{id}',[ServicesController::class,'edit_services'])->name('edit.services');
Route::post('/update-services/{id}',[ServicesController::class,'update_services'])->name('update.services');
Route::get('/delete-services/{id}',[ServicesController::class,'delete_services'])->name('delete.services');
// ==============end-services-routes================

// ==============start-client-routes==============
Route::get('/admin-client',[ClientController::class,'client'])->name('client');
Route::get('/add-client',[ClientController::class,'add_client'])->name('add.client');
Route::post('/store-client',[ClientController::class,'store_client'])->name('store.client');
Route::get('/client-status{client}',[ClientController::class,'change_status']);
Route::get('/edit-client/{id}',[ClientController::class,'edit_client'])->name('edit.client');
Route::post('/update-client/{id}',[ClientController::class,'update_client'])->name('update.client');
Route::get('/delete-client/{id}',[ClientController::class,'delete_client'])->name('delete.client');
// ==============end-client-routes================
// ================start-message=================
Route::get('/contact',[MessageController::class,'contact'])->name('frontend.contact');
Route::post('/store-message',[MessageController::class,'store_message'])->name('store.message');
// admin-get-message
Route::get('/message',[MessageController::class,'message'])->name('admin.message');
Route::get('/view-message',[MessageController::class,'message_view'])->name('view.message');
Route::get('/delete-message/{id}',[MessageController::class,'delete_message'])->name('delete.message');
// ================end-message=================

// ================start-profile===============
Route::get('/admin-profile',[ProfileController::class,'profile'])->name('profile');
Route::get('/add-profile',[ProfileController::class,'add_profile'])->name('add.profile');
Route::post('/store-profile',[ProfileController::class,'store_profile'])->name('store.profile');
Route::get('/edit-profile/{id}',[ProfileController::class,'edit_profile'])->name('edit.profile');
Route::post('/update-profile/{id}',[ProfileController::class,'update_profile'])->name('update.profile');
Route::get('/delete-profile/{id}',[ProfileController::class,'delete_profile'])->name('delete.profile');
// ================end-profile=================

// ================start-portfolio routes=================
Route::get('/admin-portfolio',[PortfolioController::class,'portfolio'])->name('portfolio');
Route::get('/add-portfolio',[PortfolioController::class,'add_portfolio'])->name('add.portfolio');
Route::post('/store-portfolio',[PortfolioController::class,'store_portfolio'])->name('store.portfolio');
Route::get('/edit-portfolio/{id}',[PortfolioController::class,'edit_portfolio'])->name('edit.portfolio');
Route::post('/update-portfolio/{id}',[PortfolioController::class,'update_portfolio'])->name('update.portfolio');
Route::get('/delete-portfolio/{id}',[PortfolioController::class,'delete_portfolio'])->name('delete.portfolio');

// ================end-portfolio routes=================

// ================start-blog-routes=================
Route::get('/admin-blog',[BlogController::class,'blog'])->name('blog');
Route::get('/add-blog',[BlogController::class,'add_blog'])->name('add.blog');
Route::post('/store-blog',[BlogController::class,'store_blog'])->name('store.blog');
Route::get('/blog-status{blog}',[BlogController::class,'change_status']);
Route::get('/edit-blog/{id}',[BlogController::class,'edit_blog'])->name('edit.blog');
Route::post('/update-blog/{id}',[BlogController::class,'update_blog'])->name('update.blog');
Route::get('/delete-blog/{id}',[BlogController::class,'delete_blog'])->name('delete.blog');

// ================end-blog-routes=================

// ================start-logo-routes================
Route::get('/admin-logo',[LogoController::class,'logo'])->name('logo');
Route::get('/add-logo',[LogoController::class,'add_logo'])->name('add.logo');
Route::post('/store-logo',[LogoController::class,'store_logo'])->name('store.logo');
Route::get('/edit-logo/{id}',[LogoController::class,'edit_logo'])->name('edit.logo');
Route::post('/update-logo/{id}',[LogoController::class,'update_logo'])->name('update.logo');
Route::get('/delete-logo/{id}',[LogoController::class,'delete_logo'])->name('delete.logo');

// ================end-logo-routes=================

// comment


