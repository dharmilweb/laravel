<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class My_Form_Controller extends Controller
{
    //
    public function Files(Request $req){
        // return "Hello From Controller";


        return $req->file("My_File")->store("User_Photo");
    }
}