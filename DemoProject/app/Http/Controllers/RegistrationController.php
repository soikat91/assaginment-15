<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class RegistrationController extends Controller
{
    
    public function register(Request $request){     

        $validator=Validator::make($request->all(),[
            'name'=>'required|string|min:2',
            'email'=>'required|email',
            'password'=>'required|string|min:8'
        ]);
            

        // validation false show message
        if($validator->fails()){

            return response()->json(
                [
                    'errors'=>$validator->errors()
                ],400
            );
        }

        // registration success message
        return response()->json([
            'message'=>'Registration Successfully'
        ],200);

    }



    // question 2 function 

    function home(){

        return redirect('/dashboard');
    }
    
    function dashboard(){
        return "welcome to our Dashboard";
    }


    function hello(){
        return "hello1";
    }


    // question 4 group with auth

    function profile(){
        
        return "successfull Login Id";
    }
    function setting(){
        
        return "Access Success";
    }

}
