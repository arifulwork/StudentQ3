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




Route::get('/select', [StudentController::class,'SelectSearch']);  

