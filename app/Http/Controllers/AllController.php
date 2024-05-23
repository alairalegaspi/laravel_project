<?php

namespace App\Http\Controllers;

use App\Models\Time;
use App\Models\User;
use Illuminate\Http\Request;

class AllController extends Controller
{
    //
    public function welcome()
    {
        // Add your logic here, for example:
        return view('welcome');
    }
    public function login(){
        return view("auth.login");
    }
    public function register(){
        return view ("auth.register");
    }

    public function registerUser(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'username'=>'required',
            'password'=>'required|min:5|max:12',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = $request->password;
        $res = $user->save();
        if ($res){
            return back()->with('success','You have registered successfully');
        }else{
            return back()->with('fail','Something is wrong');
        }
    }
    public function index(){
        $time = Time::all();
        return view("index",["time" =>$time]);
    }
    public function create(){
        return view("pages.create");
    }
    public function store(Request $request){
        $data = $request->validate([
            "name"=> "required",
            "email"=> "required|email",
            "username"=> "required",
            "password"=> "required",
            "time_in"=> "required",
            "time_out"=>"required",

        ]);
        $newData = Time::create($data);
        return redirect()-> route('index');
    }
    public function edit(Time $time){
        return view('pages.edit',['time'=>$time]);
    }
    public function update(Request $request, Time $time){
        $data = $request->validate([
            "name"=> "required",
            "email"=> "required|email",
            "username"=> "required",
            "password"=> "required",
        ]);
        $time->update($data);
        return redirect()-> route('index');
    }
    public function delete(Time $time){
        $time->delete();
        return redirect()->route('index');
    }
    public function admin(){
        return view('admin');
    }
}
