<?php namespace App\Http\Controllers;


use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;


class pagecontroller extends Controller {
    public function index() {
        $name="Mr. Mohok ";
        $text="This is home page";
        return view('Home') ->with('name', $name) ->with('text', $text);

    }

    public function about() {
        $name="Mr. x";
        $text="This is about us page";
        return view('aboutus') ->with('name', $name) ->with('text', $text);

    }

    public function our() {
        $name="Mr. x";
        $text="This is Our Teams page";
        return view('team') ->with('name', $name) ->with('text', $text);

    }

    public function contact() {
        $name="Mr. x";
        $text="This is contact page";
        return view('contact') ->with('name', $name) ->with('text', $text);

    }

    public function service() {


        // $name = "Mr. x";
        $text="This is contact page";

        return view('service') // ->with('name', $name)
        ->with('text', $text);

    }

    public function login() {

        return view('login');
    }

    public function LoginSubmitted(Request $request) {
        $validate=$request->validate([ "user_id"=>"required|min:5|max:20",
            "password"=>"required",

            ]);


        return redirect('login');
    }

    public function Registration() {

        return view('Registration');
    }

    public function RegistrationSubmitted(Request $request) {
        $validate=$request->validate([ "name"=>"required|min:5",
            "user_id"=>"required|min:5|max:20",
            "Password"=>"required|min:8|max:20",
            "ConfirmPassword"=>"required|min:8|max:20",


            ],
            ['name.required'=>"Please put you name here"]);

        $user="";
        $user.="<br> Name: ".$request->name;
        $user.="<br> User ID: ".$request->user_id;
        $user.="<br> Password: ".$request->Password;
        $user.="<br> Confirm Password ".$request->ConfirmPassword;
        return $user;
        // $name= $request->name;
        // session()->put("name",$name);


        // return view('service');

    }
}
