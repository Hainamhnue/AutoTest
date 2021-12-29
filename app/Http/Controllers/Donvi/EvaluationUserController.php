<?php

namespace App\Http\Controllers\Donvi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Admin\CriteriaUserService;
use App\Services\Donvi\ScoreUserFacultyService;
use Illuminate\Support\Facades\Auth;
use Validator;
use DB;
use App\DisgestUser;
class EvaluationUserController extends Controller
{
    //
    private $CriteriaUser,$scoreUserfacultyService;

    public function __construct(CriteriaUserService $criteriaUserService, ScoreUserFacultyService $scoreUserfacultyService)
    {

        $this->CriteriaUser = $criteriaUserService;
        $this->scoreUserfacultyService = $scoreUserfacultyService;
    }

    public function index($id){
        $criterias = $this->CriteriaUser->getCriteriaUser();
        $iid = $id;
        return view('donvi.danhgiaccvc',compact(['criterias','iid']));
    }
    public function index1($id){
        $criterias_trans = $this->CriteriaUser->getCriteriaUser1();
        $iid = $id;
        return view('donvi.diemviphamccvc',compact(['criterias_trans','iid']));
    }
    public function setdiem(Request $request, $id){
        $data = $request->input('scores');
        $sum = 0;
        foreach($data as $key=>$value){
            $sum += $value;
        }
        $this->scoreUserfacultyService->save([
            'faculty_id'=>Auth::user()->faculty_id,
            'user_id'=>$id,
            'i1'=> $sum,
            'i2'=>0
        ]);
        return redirect(url('donvi/evaluation-user-trans/'.$id));

    }

    public function setdiem1(Request $request,$id){
        $data = $request->input('vipham');
        $sum = 0;
        foreach($data as $key=>$value){
            $sum += $value;
        }
        $score = $this->scoreUserfacultyService->getAll()->last();
        $id1 = $score->id;
        $score = $this->scoreUserfacultyService->findById($id1);
        $score->i2 = $sum;
        $score->save();
        $disgest_user = DisgestUser::find($id);
        $tong = $score->i1 + $sum;
        $avg = ($disgest_user->sum + $tong)/2;
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
        $disgest_user->sum_f = $tong;
        $disgest_user->avg = $avg;
        $disgest_user->save();
        return redirect(route('quan-li.index'));
    }
    public function show_scores($id){
        $shows = DB::table('users')->join('disgest_users', 'users.id', '=', 'disgest_users.user_id')->where('users.id','=',$id)->get();
         return view('donvi.show-scores',compact('shows'));
    }
    public function total(){
        $totals = DB::table('infor_faculty')
            ->join('users', 'infor_faculty.id','=', 'users.faculty_id')
            ->join('disgest_users','disgest_users.user_id','=','users.id')->where('infor_faculty.id','=',Auth::user()->faculty_id)
            ->get();
        return view('donvi.baocao',compact('totals'));
    }
}
