<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// root route: redirect to 'student_index'
Route::get('/', function () {
    return redirect(route('student_index'));
});


// list all students
Route::get('/student/'    , [StudentController::class, 'index' ])->name('student_index');


// display create new student form.
Route::get('/student/new' , [StudentController::class, 'create'])->name('student_create');


// insert new student
Route::post('/student/'   , [StudentController::class, 'store' ])->name('student_store');


// display single student record
Route::get('/student/{id}', [StudentController::class, 'show'  ])->name('student_show');


// display edit
Route::get('edit_record/{id}', [StudentController::class, 'edit_record']);


// display delete
Route::get('delete_record/{id}', [StudentController::class, 'delete_record']);


// update data
Route::post('update_student/{id}', [StudentController::class, 'update_student']);