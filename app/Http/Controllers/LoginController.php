<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class LoginController extends Controller
{
    //
    public function getLogin(){
        if(Auth::check()){
        }else{
            return view('Login.login');
        }
    }
    public function postLogin(Request $request)
    {
        $login = [
            'email' => $request->email,
            'password' => $request->pass,
            //'level' => 1,
//            'status' => 1
        ];
        if (Auth::attempt($login))
        {
//            if(Auth::user()->level == 1){
//                return redirect()->route('donvi-home');
//            }
//            else{
//                return redirect()->route('home');
//            }
            if (Auth::user()->isadmin == 1){
                return redirect()->route('home.index');
            }
            else{
                if(Auth::user()->isdonvi == 1){
                    return redirect()->route('donvi-home');
                }
                else{
                    return redirect()->route('home');
                }
            }
        }
        else {
            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        }
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('getLogin');
    }
}
