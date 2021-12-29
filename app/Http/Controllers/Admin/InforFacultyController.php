<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Admin\InforFacultyService;
use Validator;
use DB;
class InforFacultyController extends Controller
{
    //
    private $inforfacultyService;
    public function __construct(InforFacultyService $inforFacultyService)
    {
        $this->inforfacultyService = $inforFacultyService;
    }
    public function index(){
        return view('admin.basic-table');
    }
    public function show()
    {
        $infor_faculty = $this->inforfacultyService->getAll();
        return datatables($infor_faculty)->toJson();
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->input(), array(
            'name' => 'required',
            'email' => 'required',
        ));
        if ($validator->fails()) {
            return response()->json([
                'type' => '#52ffe705',
                'title' => 'Thông báo',
                'message' => $validator->errors()->all(),
            ]);
        }
        if ($request->hasFile('img')){
            $getImg = '';
            $img = $request->img;
            $getImg = time() . '_' .$img->getClientOriginalName();
            $img->move('public/images/', $getImg);
        }
        $this->inforfacultyService->save([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'img' => $getImg,
            'introduction'=>"",
        ]);
        $infor_faculty = $this->inforfacultyService->getAll()->last();
        $this->inforfacultyService->saveAD([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'img' => $getImg,
            'faculty_id'=>$infor_faculty->id,
        ]);
        return response()->json([
            'message' => 'Thêm thành công',
            'title' => 'Thông báo',
            'type' => '#52ffe705',
        ]);
    }
    public function edit($id)
    {
        $infor_faculty = $this->inforfacultyService->findById($id);
        return response()->json(['data'=>$infor_faculty]);
    }
    public function update(Request $request)
    {
        //
        $validator = Validator::make($request->input(), array(
            'name' => 'required',
            'email' => 'required',
        ));
        if ($validator->fails()) {
            return response()->json([
                'type' => '#52ffe705',
                'title' => 'Thông báo',
                'message' => $validator->errors()->all(),
            ]);
        }
        $id = $request->get('id');
        $infor = $this->inforfacultyService->findById($id);
        if ($request->hasFile('img')){
            if(file_exists($infor->img)){
                unlink('public/images'.$infor->img);
            }
            $getImg = '';
            $img = $request->img;
            $getImg = time() . '_' .$img->getClientOriginalName();
            $img->move('public/images/', $getImg);
        }
        $this->inforfacultyService->save([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'img' => $getImg,
            'introduction'=>"",
        ],$id);
        return response()->json([
            'message' => 'Sửa thành công',
            'title' => 'Thông báo',
            'type' => '#52ffe705',
        ]);
    }
    public function destroy($id)
    {
        //
        $this->inforfacultyService->findById($id);
        $this->inforfacultyService->delete($id);
        return response()->json([
            'message'   => 'Xóa thành công',
            'title'     => 'Thông báo',
            'type'      => '#52ffe705',
        ]);
    }
    public function scores_table($id){
//        $infor = DB::table('infor_faculty')->find($id);
//        $iid = $infor->id;
        $scores = DB::table('infor_faculty')->join('scores_faculty', 'infor_faculty.id', '=', 'scores_faculty.faculty_id')->where('infor_faculty.id','=',$id)->get();
        return view('admin.show-scores-faculty',compact('scores'));
    }
}
