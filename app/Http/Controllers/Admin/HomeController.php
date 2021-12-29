<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\User;
use App\DisgestFaculty;
use App\DisgestUser;
class HomeController extends Controller
{
    //
    public function index(){
        $count = User::where('isuser',true)->count();
        $count1 = DisgestFaculty::where('sum','>',89)->count();
        $count2 = DisgestUser::where('avg','>',89)->count();
        return view('admin.admin-home',compact(['count','count1','count2']));
    }
    public function show(){
         $shows = DB::table('infor_faculty')->join('disgest_faculty', 'infor_faculty.id','=', 'disgest_faculty.faculty_id')->get();
          return datatables($shows)->toJson();
     }
}
