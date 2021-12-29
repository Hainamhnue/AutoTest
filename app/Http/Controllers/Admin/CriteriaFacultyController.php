<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Admin\CriteriaFacultyService;
use Validator;

class CriteriaFacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $citeriafacultyservice;
    public function __construct(CriteriaFacultyService $criteriaFacultyService)
    {
        $this->citeriafacultyservice = $criteriaFacultyService;
    }

    public function index(){
        return view('admin.criteria-faculty');
    }
    public function show()
    {
        $criteria_faculty = $this->citeriafacultyservice->getAll();
        return datatables($criteria_faculty)->toJson();
    }

    public function store(Request $request)
    {
        if (!isset($request->i2)) {
            $request->i2 = true;
        } else {
            $request->i2 = false;
        }
        try {
            $this->citeriafacultyservice->save([
                'name' => $request->name,
                'i1' => $request->i1,
                'i2' => $request->i2 == false ? 1 : 0
            ]);
            return response()->json([
                'message' => 'Thêm thành công',
                'title' => 'Thông báo',
                'type' => '#52ffe705',
            ]);
        } catch (\Exception $err) {
            return response()->json([
                'status' => false,
                'message' => $err->getMessage()
            ]);
        }
    }
    public function edit($id){
        $criteria_faculty = $this->citeriafacultyservice->findById($id);
        return response()->json(['data'=>$criteria_faculty]);
    }
    public function update(Request $request)
    {
        //
        $validator = Validator::make($request->input(), array(
            'name' => 'required',
            'i1' => 'required|min:1|max:2',
        ));
        if ($validator->fails()){
            return response()->json([
                'type'    => '#52ffe705',
                'title'   => 'Thông báo',
                'message' => $validator->errors()->all(),
            ]);
        }
        $id = $request->get('id');
        $this->citeriafacultyservice->findById($id);
        $this->citeriafacultyservice->save([
            'name'=>$request->get('name'),
            'i1'=>$request->get('i1'),
            'i2'=>$request->get('i2')==false?1:0,
        ],$id);
        return response()->json([
            'message'   => 'Cập nhật thành công',
            'title'     => 'Thông báo',
            'type'      => '#52ffe705',
        ]);
    }

    public function destroy($id)
    {
        //
        $this->citeriafacultyservice->findById($id);
        $this->citeriafacultyservice->delete($id);
        return response()->json([
            'message'   => 'Xóa thành công',
            'title'     => 'Thông báo',
            'type'      => '#52ffe705',
        ]);
    }
}
