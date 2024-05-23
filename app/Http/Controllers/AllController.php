<?php

namespace App\Http\Controllers;

use App\Models\Time;
use Illuminate\Http\Request;

class AllController extends Controller
{
    //
    public function welcome()
    {
        // Add your logic here, for example:
        return view('welcome');
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
}
