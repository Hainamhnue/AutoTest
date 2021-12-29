<?php
namespace App\Http\Controllers\Donvi;
use App\Http\Controllers\Controller;
use App\Export\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
class ExportController extends Controller
{
    //
    public function Export()
    {
        return Excel::download(new UsersExport, 'thongke.xlsx');
    }
}
