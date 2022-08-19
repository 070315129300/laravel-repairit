<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\user;
use Hash;
use Session;

class HomeController extends Controller
{
  public function index(){
    return view('index');
  } 

  public function contact(){
    return view('contact');
  }
    public function services(){
    return view('services');
  }
    public function signup(){
    return view('signup');
  }
     public function login(){
    return view('login');
  }
  public function signupUser(Request $request){
    //validate 
    $request->validate([ 
      'firstname'=>'required | min:4',
      'lastname'=>'required | min:4',
      'email'=>'required |email|unique:users',
      'phone'=>'required',
      'gender'=>'required',
      'password'=>'required | min:4',

    ]);
    $user = new User();
    $user->firstname = $request->firstname;
    $user->lastname = $request->lastname;
    $user->email = $request->email;
    $user->phone = $request->phone;
    $user->gender = $request->gender;
    $user->password = Hash::make($request->password);
    $res = $user->save();

    if($res){
      return back()->with('success', 'you have registered successfuly');
    }else{
      return back()->with('fail', 'something went wrong');
    }

  }

  public function loginUser(Request $request){
    $request->validate([
      'email'=> 'required |email',
      'password'=>'required',
    ]);

    $user = User::where('email', '=', $request->email)->first();
    if($user){
      if(Hash::check($request->password, $user->password)){
        $request->session()->put('loginId',$user->id);
        return redirect('dashboard');
      }else{
        return back()->with('fail', 'email or password mis-match');
      }

    }else{
      return back()->with('fail', 'email or password mis-match');
    }
  }

  public function dashboard(){
    $data = array();
    if(Session::has('loginId')){
      $data = user::where('id', '=', Session::get('loginId'))->first();
    }
    return view('dashboard', compact('data'));
  }
  public function logout(){
    if(Session::has('loginId')){
      session::pull('loginId');
      return redirect('login');
    }
  }
}
