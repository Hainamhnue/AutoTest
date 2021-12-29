<?php

namespace App\Http\Controllers\Donvi;
use App\Services\Donvi\DisgestFacultyService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DisgestFacultyController extends Controller
{
    //
    private $disgestfacultyservice;
    public function __construct( DisgestFacultyService $disgestfacultyservice)
    {
        $this->disgestfacultyservice = $disgestfacultyservice;
    }

    public function destroy($id)
    {
        $this->disgestfacultyservice->findById($id);
        $this->disgestfacultyservice->delete($id);
        return response()->json([
            'message'   => 'Xóa thành công',
            'title'     => 'Thông báo',
            'type'      => '#52ffe705',
        ]);
    }
}
