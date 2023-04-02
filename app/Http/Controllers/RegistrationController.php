<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    function index(){
        return view('form');
    }
    function register(){
        request()->validate([
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'password' => 'required'

            ],
            [
                 'name.required' => 'please fill the name',
                 'email.required' => 'please fill the email',
                 'phone.required' => 'please fill the phone',
                 'password.required' => 'please fill the password'
             ]

    );
//        dd($request->all());
    }
//    function register(Request $request){
//        Request()->validate([
//            'name.required' => 'please fill the name',
//            'email.required' => 'please fill the email',
//            'phone.required' => 'please fill the phone',
//            'password.required' => 'please fill the password'
//        ]);
//
//        dd($request->all());
//    }
}
