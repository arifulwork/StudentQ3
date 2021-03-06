<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseList;
use App\Http\Controllers\StudentController;
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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [CourseList::class, 'index']); // Class Add Controller
Route::get('/', [CourseList::class, 'courseList']); // View Course Listing
Route::get('/schedule', [CourseList::class, 'classIndex']); // View CalenderUI Page
Route::get('/classschedule/{course_id}', [CourseList::class, 'classIndexShedule']);

Route::get('/search', [CourseList::class,'search']);  // SearchBox

Route::post('/class-reservation', [StudentController::class, 'studentadd']); // StudentReservationSystem


Route::get('/firstreservtion', [StudentController::class, 'firstreservation']); // View CalenderUI Page

Route::get('/firstreservtion', [StudentController::class,'testfunction']); // View Select

Route::post('/firstreservtion', [StudentController::class,'kitter'])->name('available.check');; // Email
/* Second Subject Add */
Route::post('/secondclass-reservation', [StudentController::class, 'secondstudentadd']); // StudentReservationSystem
Route::get('/secondreservtion', [StudentController::class, 'secondreservtion']); // View CalenderUI Page

Route::get('/secondreservtion', [StudentController::class,'testfunctionw']); // View Select

Route::post('/secondreservtion', [StudentController::class,'kitters'])->name('eavailable.check');; // Email




Route::get('/searchbox', [CourseList::class,'searchStudent']);  // SearchBox