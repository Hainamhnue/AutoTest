<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class CreateNewAccount extends Controller
{
    //
    public function postNewAccount(Request $request){
        $lists = User::where('email','=',$request->email)->get();
        if (count($lists) > 0) {
            return redirect()->back()->with('status1', 'Email đã tồn tại');
        } else {
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->pass),
                'faculty_id'=>1
            ];
            User::create($data);
            return view('Login.login');
        }
    }
}
