<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class LoginController extends Controller
{
    //
    public function loginPage(){
        return view('login');
    }

    public function checkLogin(Request $req){
        echo 'i am here';
        $this->validate($req,[
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        ]);

        $user_data=array(
            'email' => $req->get('email'),
            'password' => $req->get('password')
        );

        if(Auth::attempt($user_data)){
            return redirect('dashboard');
        }
        else{
            return back()->with('error','wrog Login Details');
        }
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
