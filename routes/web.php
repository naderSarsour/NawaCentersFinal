<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LabController;
use App\Http\Controllers\CenterController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CalenderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\Admin\ProjectController;
// use App\Http\Controllers\Admin\;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//return bcrypt(123);


Route::prefix('')->name('admin.')->middleware('auth')->group(function(){

Route::get('/',[AdminController::class,'index'])->name('index');

//Route::resource('news',NewsController::class);

//Route::resource('projects',ProjectController::class);

//Route::get('all-donation', [ProjectController::class,'donations'])->name('project.donation');


//Route::resource('events',EventsController::class);
//Route::get('all-events/enrollments', [EventsController::class, 'enrollments'])->name('all-events.enrollments');


Route::resource('trainer',TrainerController::class);
Route::resource('course',CourseController::class);
Route::resource('center',CenterController::class);
Route::resource('category',CategoryController::class);
Route::resource('lab',LabController::class);
Route::resource('calender1',CalenderController::class);
Route::resource('activity',ActivityController::class);


Route::get('calenders', [CourseController::class,'calender'])->name('course.calender');
});
Auth::routes();

Route::get('/web',[WebsiteController::class,'index'])->name('website.home');

//Route::get('news/{id}',[WebsiteController::class,'news'])->name('website.news');
//Route::post('news/{id}/comments',[WebsiteController::class,'comments'])->name('website.comments');

//Route::get('events/{id}',[WebsiteController::class,'events'])->name('website.events');
//Route::post('events/{id}/enrolled',[WebsiteController::class,'enrolled'])->name('website.enrolled');

Route::post('contact',[WebsiteController::class,'contact'])->name('website.contact');

//Route::get('projects/{id}',[WebsiteController::class,'projects'])->name('website.projects');

//Route::post('projects/{id}/donation',[WebsiteController::class,'donation'])->name('website.donation');


// $2y$10$SXZMwzQsvx8xJeLmCj.MLebuKSBST02czwoy85ryZyG5C3VXfPwxO

