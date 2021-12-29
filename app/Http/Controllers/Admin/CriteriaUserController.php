<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Admin\CriteriaUserService;
use Validator;

class CriteriaUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $criteriaUserService;
    public function __construct(CriteriaUserService $criteriaUserService)
    {
        $this->criteriaUserService = $criteriaUserService;
    }

    public function index()
    {
        //

        return view('admin.criteria-user');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!isset($request->i2)){
            $request->i2 = true;
        }else{
            $request->i2 = false;
        }
        try {
            $this->criteriaUserService->save([
                'name'=>$request->name,
                'i1'=>$request->i1,
                'i2'=>$request->i2==false?1:0
            ]);
            return response()->json([
                'message'   => 'Thêm thành công',
                'title'     => 'Thông báo',
                'type'      => '#52ffe705',
            ]);
        }
       catch (\Exception $err){
            return response()->json([
               'status'=>false,
               'message'=>$err->getMessage()
            ]);
       }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $criteria_users = $this->criteriaUserService->getAll();
        return datatables($criteria_users)->toJson();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $criteria_users = $this->criteriaUserService->findById($id);
        return response()->json(['data'=>$criteria_users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        $this->criteriaUserService->findById($id);
        $this->criteriaUserService->save([
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $this->criteriaUserService->findById($id);
        $this->criteriaUserService->delete($id);
        return response()->json([
            'message'   => 'Xóa thành công',
            'title'     => 'Thông báo',
            'type'      => '#52ffe705',
        ]);
    }
}
