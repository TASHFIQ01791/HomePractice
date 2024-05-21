<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;


// _____ Department CRUD _____

//  1. Insert Operation
Route::get('Department/create',[DepartmentController::class,'create']);
Route::post('Department/store',[DepartmentController::class,'store']);
// 2. Edit or update operation
Route::get('Department/all',[DepartmentController::class,'all']);
// 3. Edit operation
Route::get('Department/edit/{id}',[DepartmentController::class,'edit']);
Route::post('Department/update/{id}',[DepartmentController::class,'update']);
// 4. Delete Operation
Route::get('Department/delete/{id}',[DepartmentController::class,'delete']);
