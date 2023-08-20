<?php
use Illuminate\Support\Facades\Route;
// Website
use App\Http\Controllers\Website\HomeController as WebsiteHomeController;

/**
 * website routes
 */
Route::group(['as' =>'website.'], function () {
    // home page
    Route::get('', [WebsiteHomeController::class, 'home'])->name('home');
    // other pages
    Route::get('about', [WebsiteHomeController::class, 'about'])->name('about');
    Route::get('blog', [WebsiteHomeController::class, 'blog'])->name('blog');
    Route::get('blog-singel', [WebsiteHomeController::class, 'blogSingel'])->name('blog-singel');
    Route::get('contact', [WebsiteHomeController::class, 'contact'])->name('contact');
    Route::get('contact-demo2', [WebsiteHomeController::class, 'contactDemo2'])->name('contact-demo2');
    Route::get('courses', [WebsiteHomeController::class, 'courses'])->name('courses');
    Route::get('courses-singel', [WebsiteHomeController::class, 'coursesSingel'])->name('courses-singel');
    Route::get('events', [WebsiteHomeController::class, 'events'])->name('events');
    Route::get('events-singel', [WebsiteHomeController::class, 'eventsSingel'])->name('events-singel');
    Route::get('home-demo2', [WebsiteHomeController::class, 'homeDemo2'])->name('home-demo2');
    Route::get('home-demo3', [WebsiteHomeController::class, 'homeDemo3'])->name('home-demo3');
    Route::get('home-demo4', [WebsiteHomeController::class, 'homeDemo4'])->name('home-demo4');
    Route::get('shop', [WebsiteHomeController::class, 'shop'])->name('shop');
    Route::get('shop-singel', [WebsiteHomeController::class, 'shopSingel'])->name('shop-singel');
    Route::get('teachers', [WebsiteHomeController::class, 'teachers'])->name('teachers');
    Route::get('teachers-singel', [WebsiteHomeController::class, 'teachersSingel'])->name('teachers-singel');
});