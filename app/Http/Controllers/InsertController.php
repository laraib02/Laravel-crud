<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\insert;

class InsertController extends Controller
{
    function insert()
    {
        $url = url('insert');
        $title = "Insert Data";
        $data = compact('url' , 'title');
        return view('insert_form')->with($data);
    }

//
    function store(Request $request){
        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'

        ],

            [
                'name.required' => 'please fill the name',
                'email.required' => 'please fill the email',
                'password.required' => 'please fill the password'
            ]
        );

        $insert = new insert;
        $insert->Name = $request['name'];
        $insert->Email = $request['email'];
        $insert->Password = md5($request['password']);
        $insert->save();
        return redirect('/insert/view');
    }
//    function store(Request $request){
//        $insert = new insert;
//        $insert->Name = $request['name'];
//        $insert->Email = $request['email'];
//        $insert->Password = md5($request['password']);
//        $insert->save();
//        return redirect('/insert/view');
//    }
    function view(){
        $insert = insert::all();
        $data = compact('insert');
        return view('insert-view')->with($data);
    }
    function trash($id){
//        $insert= insert::find($id)->delete();
        $insert = insert::find($id);
        if(!is_null($insert)){
            $insert->delete();
        }
//        return redirect()->back();
        return redirect('insert/view');
    }
    function edit($id){
        $insert = insert::find($id);


        if(is_null($insert)){
            return redirect('insert/view');
        }
        else{
            $title = "Update Data";
            $url = url('update') ."/". $id;
            $data = compact('insert' , 'url' , 'title');
            // dd($insert->Name);
            return view('insert_form')->with($data);
        }
    }
    function update($id, Request $request){
        $insert = insert::find($id);
        $insert->Name = $request['name'];
        $insert->Email = $request['email'];
        $insert->Password = md5($request['password']);
        $insert->save();
        return redirect('insert/view');
    }
}
