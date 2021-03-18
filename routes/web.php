<?php

use App\Http\Controllers\EditorController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gallery', [GalleryController::class, 'gallery']);

Route::get('/editor', [EditorController::class, 'editor']);

Route::get('/add-student' ,[StudentController::class,'addStudent']);

Route::post('/add-student', [StudentController::class, 'storeStudent']);

Route::get('/all-students', [StudentController::class, 'students']);

Route::get('/edit-student/{id}', [StudentController::class, 'editstudent']);

Route::post('/update-student', [StudentController::class, 'updateStudent']);

Route::get('/deleted-student/{id}', [StudentController::class, 'deleteStudent']);



