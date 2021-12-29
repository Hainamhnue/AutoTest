<?php

namespace App\Http\Controllers\User;

use App\DisgestUser;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Services\Admin\CriteriaUserService;
use App\Services\User\ScoreUserService;
use Illuminate\Support\Facades\Auth;
use Validator;
use DB;
class ScoreUserController extends Controller
{
    //
    private $criteriauserservice, $scoreuserservice;
    public function __construct(CriteriaUserService $criteriaUserService, ScoreUserService $scoreUserService)
    {
        $this->criteriauserservice = $criteriaUserService;
        $this->scoreuserservice = $scoreUserService;
    }
    public function index(){
        $criterias_user = $this->criteriauserservice->getCriteriaUser();
        return view('FrontEnd.ccvc',compact('criterias_user'));
    }
    public function index1(){
        $criterias_user_trans = $this->criteriauserservice->getCriteriaUser1();
        return view('FrontEnd.vipham',compact('criterias_user_trans'));
    }
    public function setdiem(Request $request){
        $data = $request->input('scores');
        $sum = 0;
        foreach($data as $key=>$value){
            $sum += $value;
        }
        $this->scoreuserservice->save([
            'user_id'=>Auth::user()->id,
            'i1'=> $sum,
            'i2'=>0
        ]);
        return redirect(url('user/vi-pham'));

    }
    public function setdiem1(Request $request){
        $data = $request->input('vipham');
        $sum = 0;
        foreach($data as $key=>$value){
            $sum += $value;
        }
        $score = $this->scoreuserservice->getAll()->last();
        $id = $score->id;
        $score = $this->scoreuserservice->findById($id);
        $score->i2 = $sum;
        $score->save();
        $disgest_user = new DisgestUser();
        $avg = $score->i1 + $sum;
        if ($avg < 95){
            if(89<$avg && $avg<95){
                $disgest_user->disgest = 'B';
            }
            elseif ($avg > 84 && $avg < 90){
                $disgest_user->disgest = 'C1';
            }
            elseif ($avg > 79 && $avg < 85){
                $disgest_user->disgest = 'C2';
            }
            else{
                $disgest_user->disgest = 'D';
            }
        }
        else{
            $disgest_user->disgest = 'A';
        }
        $disgest_user->sum= $avg;
        $disgest_user->user_id = Auth::user()->id;
        $disgest_user->save();
        return response()->json([
            'message' => 'Thêm thành công',
            'title' => 'Thông báo',
            'type' => '#52ffe705',
        ]);
    }
    public function show_scores(){
        $shows = DB::table('users')->join('disgest_users', 'users.id', '=', 'disgest_users.user_id')->where('users.id','=',Auth::user()->id)->get();
        return view('FrontEnd.danhgia',compact('shows'));
    }
    public function destroy($id){
        DisgestUser::find($id);
        DisgestUser::destroy($id);
        return response()->json([
            'message' => 'Xóa thành công',
            'title' => 'Thông báo',
            'type' => '#52ffe705',
        ]);
    }
}
