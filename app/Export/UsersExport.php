<?php
namespace App\Export;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class UsersExport implements FromCollection,WithHeadings
{

    public function collection()
    {
        $totals = DB::table('infor_faculty')
            ->join('users', 'infor_faculty.id','=', 'users.faculty_id')
            ->join('disgest_users','disgest_users.user_id','=','users.id')->where('infor_faculty.id','=',Auth::user()->faculty_id)
            ->get();
        foreach ($totals as $row) {
            $user[] = array(
                '0' => $row->name,
                '1' => $row->bomon,
                '2' => $row->sum,
                '3' => $row->sum_f,
                '4' => $row->avg,
                '5' => $row->disgest,
                '6' => $row->created_at,
                '7' => $row->updated_at,
            );
        }

        return (collect($user));
    }

    public function headings(): array
    {
        return [
            'Tên',
            'Bộ môn',
            'Điểm cá nhân tự đánh giá',
            'Điểm khoa đánh giá',
            'Điểm trung bình',
            'Xếp loại',
            'Ngày tạo',
            'Ngày cập nhật',
        ];
    }
}
