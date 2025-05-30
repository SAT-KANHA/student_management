<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LayController;
use App\Http\Controllers\testingController;
use App\Models\classController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/create-student', function () {
    return view('students.create');
});
Route::get('/create-class', function () {
    return view('classes.create');
});
Route::get('/create-sutdent', function () {
});
Route::get('/list-student', [StudentController::class, 'index']);
Route::get('/list-student', [StudentController::class, 'index']);
Route::get('/list-testing', [testingController::class, 'index']);

Route::post('/store-class',[\App\Http\Controllers\classController::class,'store']);
Route::get('/list-class',[\App\Http\Controllers\classController::class,'index']);
Route::get('/student-class',[\App\Http\Controllers\studentController::class,'index']);
Route::get('/edit-class/{id}',[\App\Http\Controllers\classController::class,'edit']);
Route::put('/update-class/{id}', [\App\Http\Controllers\classController::class, 'update']);
Route::delete('/delete-class/{id}', [\App\Http\Controllers\classController::class, 'destroy']);

Route::get('/list-student', [studentController::class, 'index']);
Route::get('/create-student', [studentController::class, 'create']);
Route::post('/store-student', [studentController::class, 'store']);
Route::get('/edit-student/{id}', [studentController::class, 'edit']);
Route::put('/update-student/{id}', [studentController::class, 'update']);
Route::delete('/delete-student/{id}', [studentController::class, 'destroy']);

Route::get('/testing', [testingController::class, 'index']);
Route::get('/First Name-testing', [testingController::class, 'create']);
Route::post('/Email-testing', [testingController::class, 'store']);
Route::get('/Mobile-testing/{id}', [testingController::class, 'edit']);
Route::put('/Password-testing/{id}', [testingController::class, 'update']);
Route::delete('/Submit-testing/{id}', [testingController::class, 'destroy']);






