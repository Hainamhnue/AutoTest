<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\User\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
class UserController extends Controller
{
    //
    private $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function show(){
        return view('FrontEnd.profile');
    }
    public function update(Request $request)
    {
        //
        $validator = Validator::make($request->input(), array(
            'name' => 'required',
            'email' => 'required',
            'password'=>'required|min:6|max:8',
            'phone'=>'required|min:10|max:10',
            'bomon'=>'required',
            'introduction'=>'required'
        ));
        if ($validator->fails()) {
            return response()->json([
                'type' => '#52ffe705',
                'title' => 'Thông báo',
                'message' => $validator->errors()->all(),
            ]);
        }
        $id = Auth::user()->id;
        $user = $this->userService->findById($id);
        if ($request->hasFile('img')){
            if(file_exists($user->img)){
                unlink('public/images'.$user->img);
            }
            $getImg = '';
            $img = $request->img;
            $getImg = time() . '_' .$img->getClientOriginalName();
            $img->move('public/images/', $getImg);
        }
        $this->userService->save([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password'=>$request->get('password'),
            'phone'=>$request->get('phone'),
            'img'=>$getImg,
            'bomon' => $request->get('bomon'),
            'introduction' => $request->get('introduction'),

        ],$id);
        return response()->json([
            'message' => 'Sửa thành công',
            'title' => 'Thông báo',
            'type' => '#52ffe705',
        ]);
    }
}
