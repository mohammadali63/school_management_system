<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Webcontroller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeacherController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[Webcontroller::class,'index'])->name('home');
Route::get('/course-detail',[Webcontroller::class,'detail'])->name('course-detail');
Route::get('/user-login',[AuthController::class,'login'])->name('user-login');
Route::get('/user-register',[AuthController::class,'register'])->name('user-register');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('home');
    Route::get('/add/teacher',[TeacherController::class,'index'])->name('add-teacher');
    Route::post('/addnew/teacher',[TeacherController::class,'CreateTeacher'])->name('new-teacher');
    Route::get('/manage/teacher',[TeacherController::class,'manageTeacher'])->name('manage-teacher');


    Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified','SuperAdmin'])->group(function (){
        Route::get('/add-user',[UserController::class,'index'])->name('user');
        Route::post('/new/user',[UserController::class,'Create'])->name('new-user');
        Route::get('/manage-user',[UserController::class,'manage'])->name('manage.user');
        Route::get('/edit/user/{id}',[UserController::class,'Edit'])->name('edit-user');
        Route::post('/update/user/{id}',[UserController::class,'Update'])->name('update-user');
        Route::get('/delete/user/{id}',[UserController::class,'Delete'])->name('delete-user');
    });

});
