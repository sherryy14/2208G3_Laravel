<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function home(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function post(){
        return view('post');
    }
    public function product(){
        return view('product');
    }
    public function contact(){
        $url = "/contact";
        $btn = "Add";
        $title = "Contact";
        return view('contact',['url'=> $url, 'title'=> $title, 'btn'=>$btn]);
    }

    public function form(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:registration,email',
            'city' => 'required',
            'password' => 'required',
            'cpassword' => 'required|same:password',
            'phone' => 'required|between:10,11',
        ],[
          'name.required'=>'Name field is required!',
          'email.required'=>'Email field is required!',
          'email.email'=>'Email field must be a valid email address!',
          'email.regex'=>'Email ka pattern match nh horha',
          'password.required'=>'Password field is required!',
          'cpassword.same'=>'Confirm Password must match',
        ]);

        // insert query 
        // table 
        $res = new Registration();

        // table column name, form attribute name 
        $res->name = $request->name;
        $res->email = $request->email;
        $res->city = $request->city;
        $res->pass = $request->password;
        $res->phone = $request->phone;

        $res->save();

        return redirect('/contact');
    }


    public function user(){

        $request = Registration::all();

        $users = compact('request');

        return view('user')->with($users);

    }


    public function delete($id){

        $new_id = $id /2323;
        $user = Registration::find($new_id);
        if(!is_null($user)){
            $user->delete();

        }
        // return view('/user');
        return redirect('/user');
    }


    public function edit($id){

        $user = Registration::find($id);

        $url = '/update' . '/' . $id;
        $title = "Update";
        $btn = "Update";
        $data = compact('user','url','title','btn');

        return view('/contact')->with($data);
       
    }

    public function update($id, Request $request){

        $user = Registration::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->city = $request->city;
        $user->phone = $request->phone;

        $user->save();

        return redirect('/user');
    }


    public function trash(){
        $user = Registration::onlyTrashed()->get();

        return view('trash',['request'=>$user]);
    }

    public function restore($id){
        $user = Registration::withTrashed()
        ->where('c_id', $id)
        ->restore();

        return redirect('/user');

    }

    public function pdelete($id){
        $user = Registration::onlyTrashed()->where('c_id', $id)->forceDelete();

        return redirect('/trash');
        
    }

}
