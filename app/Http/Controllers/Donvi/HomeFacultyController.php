<?php
namespace App\Http\Controllers\Donvi;
use App\DisgestFaculty;
use App\DisgestUser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\User;
class HomeFacultyController extends Controller
{
    //
    public function index(){
        $count = User::where([
                ['faculty_id','=',Auth::user()->faculty_id],
                ['isuser','=',1],
            ])->count();
        $count1 = DisgestFaculty::where([
            ['faculty_id','=',Auth::user()->faculty_id],
        ])->get();
        return view('donvi.donvi-home',compact(['count','count1']));
    }
    public function show(){
//        $shows = DB::table('infor_faculty')
//            ->where('infor_faculty.id','=',Auth::user()->id)
//            ->join('users', 'infor_faculty.id','=', 'users.faculty_id')
//            ->join('disgest_users', 'users.id', '=', 'disgest_users.user_id')
//            ->get();
            $shows = DB::table('infor_faculty')
            ->join('users', 'infor_faculty.id','=', 'users.faculty_id')
            ->join('disgest_users','disgest_users.user_id','=','users.id')->where('infor_faculty.id','=',Auth::user()->faculty_id)
            ->get();
        return datatables($shows)->toJson();
    }
}
