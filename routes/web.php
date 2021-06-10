<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

        Route::get("/",[FrontendController::class,"index"]);
        Route::get("/course/{alias}",[FrontendController::class,"course"])->name("course");
        Route::get("/videos/{alias}",[FrontendController::class,"videos"])->name("video");
        Route::get("/video-single/{alias}",[FrontendController::class,"videoSingle"])->name("videoSingle")->middleware("auth");
        Route::get("/reviews",[FrontendController::class,"reviews"])->name("review");
        Route::get("/review-single/{alias}",[FrontendController::class,"reviewSingle"])->name("reviewSingle");
        Route::post("/auth",[FrontendController::class,"auth"])->name("auth");
        Route::post("/registerUser",[FrontendController::class,"registerUser"])->name("registerUser");

    Auth::routes();


    Route::group(["prefix"=>"profile","middleware"=>"auth"],function (){
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::post("/edit-user",[App\Http\Controllers\HomeController::class, 'editUser'])->name("editUser");

        Route::group(["middleware"=>"admin"],function (){
            Route::resource('reviews', App\Http\Controllers\ReviewController::class);
            Route::resource('users', App\Http\Controllers\UserController::class);
            Route::resource('categories', App\Http\Controllers\CategoryController::class);
            Route::resource('courses', App\Http\Controllers\CourseController::class);
            Route::resource('videos', App\Http\Controllers\VideoController::class);
        });


    });


});

