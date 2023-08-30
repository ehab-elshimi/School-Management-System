<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassroomsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
// Dashboard Home For Each Role
use App\Http\Controllers\DashboardHome\SuperAdminController as HomeSuperAdminController;
use App\Http\Controllers\DashboardHome\AdminController as HomeAdminController;
use App\Http\Controllers\DashboardHome\TeacherController as HomeTeacherController;
use App\Http\Controllers\DashboardHome\ParentController as HomeParentController;
use App\Http\Controllers\DashboardHome\StudentController as HomeStudentController;
use App\Http\Controllers\ParentsController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\TeachersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Super Admin Routes
| Admin Routes
| Teacher Routes
| Parent Routes
| Student Routes
|
*/

/**
 * authentication routes
 */
Route::group(['middleware' => 'prevent-back-history'],function(){

	Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'AuthLogin'])->name('login');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    
    // Global Home Controller
    Route::get('dashboard', [HomeController::class, 'dashboard'])->middleware('auth')->name('dashboard.home');
});

/**
 * super-admins routes
 */

Route::group(['prefix' => 'super-admin','middleware'=> ['auth','role:Super Admin'], 'as' =>'super-admin.'], function () {
    // home page
    Route::get('home', [HomeSuperAdminController::class, 'home'])->name('home');
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);

});


/**
 * admins routes
 */

Route::group(['prefix' => 'admin','middleware'=> ['auth', 'role:Admin'], 'as' =>'admin.'], function () {
    // home page
    Route::get('home', [HomeAdminController::class, 'home'])->name('home');
    Route::resource('teachers', TeachersController::class);
    Route::resource('parents', ParentsController::class);
    Route::resource('students', StudentsController::class);
    Route::resource('classrooms', ClassroomsController::class);
    Route::resource('subjects', SubjectsController::class);

});


/**
 * teachers routes
 */

Route::group(['prefix' => 'teacher','middleware'=> ['auth', 'role:Teacher'], 'as' =>'teacher.'], function () {
    // home page
    Route::get('home', [HomeTeacherController::class, 'home'])->name('home');
});


/**
 * parents routes
 */

Route::group(['prefix' => 'parent','middleware'=> ['auth', 'role:Parent'], 'as' =>'parent.'], function () {
    // home page
    Route::get('home', [HomeParentController::class, 'home'])->name('home');
});

/**
 * students routes
 */

Route::group(['prefix' => 'student','middleware'=> ['auth', 'role:Student'],  'as' =>'student.'], function () {
    // home page
    Route::get('home', [HomeStudentController::class, 'home'])->name('home');
});

/**
 * website routes
 */
require __DIR__.'/website.php';

