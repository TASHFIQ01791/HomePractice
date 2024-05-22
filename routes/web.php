<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\AdminLayoutController;


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


// _________ Website Design part _________

Route::get('/',[WebsiteController::class,'home']);
Route::get('about',[WebsiteController::class,'about']);
Route::get('contact',[WebsiteController::class,'contact']);
Route::get('services',[WebsiteController::class,'services']);

// __________ Website Admin Part __________
Route::get('admin/dashboard',[AdminLayoutController::class,'dashboard']);
Route::get('admin/table',[AdminLayoutController::class,'table']);
Route::get('admin/login',[AdminLayoutController::class,'login']);
Route::get('admin/register',[AdminLayoutController::class,'register']);
