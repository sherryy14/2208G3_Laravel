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
        return view('contact');
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


        // echo "<pre>";
        // print_r($request->toArray());die;

        $users = compact('request');

        return view('user')->with($users);

    }
}
