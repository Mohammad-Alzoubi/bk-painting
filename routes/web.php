<?php

use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\ContactController;

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('frontend.pages.index');
//});

Route::name("frontend.")->group(function () {
    Route::get("/", [HomeController::class, "index"])->name("index");
    Route::get("/about-us", [HomeController::class, "getPageAbout"])->name("about");
    Route::get("/contact-us", [HomeController::class, "getPageContact"])->name("contact");

    // Services
    Route::prefix('services')->name('service.')->group(function (){
        Route::get("/", [ServiceController::class, "index"])->name("index");
        Route::get("/interior-painting-services", [ServiceController::class, "getPageServiceDetails"])->name("service_details");
        Route::get("/exterior-painting-services", [ServiceController::class, "getPageExteriorPaintingServiceDetails"])->name("service_details2");

    });

    // Blogs
    Route::prefix('Blogs')->name('blog.')->group(function (){
        Route::get("/", [BlogController::class, "index"])->name("index");
        Route::get("/blog-details", [BlogController::class, "getPageBlogDetails"])->name("blog_details");
    });


    Route::post('/contact-send', [ContactController::class, 'send'])->name('contact.send');


});

