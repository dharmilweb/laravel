<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\My_Form_Controller;
use App\Http\Controllers\DBUserForm;
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

//Form with Photo Upload User_Photo Folder
route::view("Uploads","My_Forms");
route::post("/Datas" , [ My_Form_Controller::class, "Files"]);

// User Form with Database 
//Insert User
route::view("DatabaseForm","Db_Users");
route::post("/Insert_User", [ DBUserForm::class, "UserDB"]);

// Show User
route::get("/Display_UserForm", [ DBUserForm::class , "ShowDB" ]);

// Update User
route::get("Update_Form/{id}", [ DBUserForm::class , "UpdateSelect"]);
route::post("/UpdatePage", [ DBUserForm::class, "UpdateData"]);

// Select User
route::get("DeletePage/{id}", [  DBUserForm::class, "DeleteData" ]);