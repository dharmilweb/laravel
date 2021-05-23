<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\_my_user;

class DBUserForm extends Controller
{
    //

    function UserDB(Request $req){

        //return "this is Form Data";
        //return $req->all();
        
        $UserLang = implode(",",$req->input("F_Check"));
        // name	email	address	Job	gender	contry	language	date	image
        $_my_user = new _my_user();

            $_my_user->name = $req->input("F_UserName");
            $_my_user->email = $req->input("F_Email");
            $_my_user->address = $req->input("F_Add");
            $_my_user->Job = $req->input("F_Job");
            $_my_user->gender = $req->input("F_Gen");
            $_my_user->contry = $req->input("F_Contry");
            $_my_user->language = $UserLang;
            $_my_user->date = $req->input("F_Date");
            //$_my_user->image = $req->input("F_File");
            
            if($req->hasfile("F_File")){

                $files = $req->file("F_File");
                $Extention = $files->getClientOriginalExtension();
                $FileNames = time() .".".$Extention;
                $files->move("Uploads/DBUserPhoto",$FileNames);
                $_my_user->image = $FileNames;
                
            }else{
                return $req;
                $_my_user->image = "";
            }

        $_my_user->save();
      return redirect("Display_UserForm");
    }

    public function ShowDB(){

        $UserDatas = _my_user::all();
        return view("Display_UserForm" , ['DBUser' => $UserDatas]);
    }

    public function UpdateSelect($id){

        $UpDBForm = _my_user::find($id);
        //return _my_user::find($id);
        return view("Update_Form", [ "UpForm" => $UpDBForm]);
    }

    public function UpdateData(Request $req){

        $UserDatas = new _my_user();

        $Ups_Lang = implode(",", $req->input("UpF_Check"));
        // name	email	address	Job	gender	contry	language	date	image
            
            $Up_User = _my_user::find($req->input("UpF_id"));
            $Up_User->name = $req->input("UpF_UserName");
            $Up_User->email = $req->input("UpF_Email");
            $Up_User->address = $req->input("UpF_Add");
            $Up_User->Job = $req->input("UpF_Job");
            $Up_User->gender = $req->input("UpF_Gen");
            $Up_User->contry = $req->input("UpF_Contry");
            $Up_User->language = $Ups_Lang;
            $Up_User->date = $req->input("UpF_Date");

            if($req->hasfile("UpF_File")){
                
                $Up_file = $req->file("UpF_File");
                $Up_Extention = $Up_file->getClientOriginalExtension();
                $Up_FileName = time().".". $Up_Extention;
                $Up_file->move("Uploads/DBUserPhoto" ,$Up_FileName);
                $Up_User->image = $Up_FileName;

            }else{

                return $req;
                $Up_User->image = "";
            }

        $Up_User->save();
        
        return redirect("Display_UserForm");
    }

    public function DeleteData($id){
     
//        return "Delete Page is Wokning";
        $Del_DBData = _my_user::find($id);
        $Del_DBData->delete();

        return redirect("Display_UserForm");
    }

}
