<?php

namespace App\Http\Controllers\Donvi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Admin\CriteriaFacultyService;
use App\Services\Donvi\ScoreFacultyService;
use Illuminate\Support\Facades\Auth;
use Validator, Session;
use DB;
use App\DisgestFaculty;
class EvaluationFacultyController extends Controller
{
    //
    private $CriteriaFacultyService;
    private $ScoreFacultyService;
    public function __construct(CriteriaFacultyService $CriteriaFacultyService, ScoreFacultyService $ScoreFacultyService)
    {
        $this->CriteriaFacultyService = $CriteriaFacultyService;
        $this->ScoreFacultyService = $ScoreFacultyService;
    }
    public function index(){
        $criterias_faculty = $this->CriteriaFacultyService->getCriteriaFaculty();
        return view('donvi.danhgiadonvi',compact('criterias_faculty'));
    }
    public function index1(){
        $criterias_trans = $this->CriteriaFacultyService->getCriteriaFaculty1();
        return view('donvi.diemvipham',compact('criterias_trans'));
    }
    public function store(Request $request){
        $validator = Validator::make($request->input(), array(
            'i1' => 'required',
        ),['i1.required'=>'Vui lòng nhập điểm đạt']);
        if ($validator->fails()) {
            return response()->json([
                'type' => '#52ffe705',
                'title' => 'Thông báo',
                'message' => $validator->errors()->all(),
            ]);
        }
        $this->ScoreFacultyService->save([
//            'criteria_faculty_id'=>$id,
            'faculty_id'=>Auth::user()->faculty_id,
            'i1'=> $request->i1,
            'i2'=>0
        ]);
        return response()->json([
            'message' => 'Thêm thành công',
            'title' => 'Thông báo',
            'type' => '#52ffe705',
        ]);
    }
    public function setsession(Request $request){
            $data = $request->input('scores');
            $sum = 0;
            foreach($data as $key=>$value){
                $sum += $value;
            }
        $this->ScoreFacultyService->save([
            'faculty_id'=>Auth::user()->faculty_id,
            'i1'=> $sum,
            'i2'=>0
        ]);
            return redirect(url('donvi/evaluation-faculty-trans'));

    }

    public function setsession1(Request $request){
        $data = $request->input('vipham');
        $sum = 0;
        foreach($data as $key=>$value){
            $sum += $value;
        }
        $score = $this->ScoreFacultyService->get()->last();
        $id = $score->id;
        $score = $this->ScoreFacultyService->findById($id);
        $score->i2 = $sum;
        $score->save();
        $disgest_faculty  = new DisgestFaculty();
        $avg = $score->i1 + $sum;
        if ($avg < 95){
            if(89<$avg && $avg<95){
                $disgest_faculty->disgest = 'B';
            }
            elseif ($avg > 84 && $avg < 90){
                $disgest_faculty->disgest = 'C1';
            }
            elseif ($avg > 79 && $avg < 85){
                $disgest_faculty->disgest = 'C2';
            }
            else{
                $disgest_faculty->disgest = 'D';
            }
        }
        else{
            $disgest_faculty->disgest = 'A';
        }
        $disgest_faculty->sum = $avg;
        $disgest_faculty->faculty_id = Auth::user()->faculty_id;
        $disgest_faculty->save();
        return response()->json([
            'message' => 'Thêm thành công',
            'title' => 'Thông báo',
            'type' => '#52ffe705',
        ]);
    }
    public function show_scores(){
        $shows = DB::table('infor_faculty')->join('disgest_faculty', 'infor_faculty.id', '=', 'disgest_faculty.faculty_id')->where('infor_faculty.id','=',Auth::user()->faculty_id)->get();
        return view('donvi.show-scores',compact('shows'));
    }
}
