<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use Mail;
class EmailController extends Controller
{
    //
    public function index(){
        return view('admin.email');
    }
    public function sendEmail(Request $request)
    {
        $data = [
            'content'=>$request->get('email')
        ];
        Mail::send('admin.view-email',$data,function($message){
            $message->from('quatdaikhnue@gmail.com','Trường Đại Học Sư Phạm Hà Nội');
            $message->to('nguyenhainamhnue@gmail.com','Cán bộ công chức viên chức trực thuộc đơn vị');
            $message->subject('Thông báo');

        });
        return response()->json([
            'message' => 'Gửi thành công thành công',
            'title' => 'Thông báo',
            'type' => '#52ffe705',
        ]);

    }
}
