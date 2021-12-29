<?php
namespace App\Http\Controllers\Donvi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Donvi\UserService;
use Illuminate\Support\Facades\Auth;
use PDF;
use DB;
use Validator;
class UserController extends Controller
{
    //
    private $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function index(){
        return view('donvi.basic-table');
    }
    public function show($id){
        $user = $this->userService->getAll($id);
        return datatables($user)->toJson();
    }
    public function store(Request $request){
        $validator = Validator::make($request->input(), array(
            'name' => 'required',
            'email' => 'required',
            'bomon'=>  'required'
        ));
        if ($validator->fails()) {
            return response()->json([
                'type' => '#52ffe705',
                'title' => 'Thông báo',
                'message' => $validator->errors()->all(),
            ]);
        }
        $this->userService->save([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'bomon'=>$request->get('bomon'),
            'faculty_id'=>Auth::user()->faculty_id
        ]);
        return response()->json([
            'message' => 'Thêm thành công',
            'title' => 'Thông báo',
            'type' => '#52ffe705',
        ]);
    }
    public function edit($id)
    {
        $user = $this->userService->findById($id);
        return response()->json(['data'=> $user]);
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
        $user = $this->userService->findById($id);
        $this->userService->save([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'bomon' => $request->get('bomon'),
            'faculty_id'=>Auth::user()->faculty_id,
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
        $this->userService->findById($id);
        $this->userService->delete($id);
        return response()->json([
            'message'   => 'Xóa thành công',
            'title'     => 'Thông báo',
            'type'      => '#52ffe705',
        ]);
    }
    public function pdf(){
        $totals = DB::table('infor_faculty')
            ->join('users', 'infor_faculty.id','=', 'users.faculty_id')
            ->join('disgest_users','disgest_users.user_id','=','users.id')->where('infor_faculty.id','=',Auth::user()->faculty_id)
            ->get();
        $pdf = PDF::loadView('donvi.baocao',compact('totals'));
        return $pdf->download('users_notes.pdf');
    }
}
