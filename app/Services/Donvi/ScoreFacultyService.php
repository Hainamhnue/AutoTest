<?php
namespace App\Services\Donvi;
use App\ScoreFaculty;
class ScoreFacultyService{
    public function save(array $data,int $id = null){

        return ScoreFaculty::updateOrCreate(
            [
                'id'=>$id
            ],
            [
//                'criteria_faculty_id'=>$data['criteria_faculty_id'],
                'faculty_id'=>$data['faculty_id'],
                'i1'=>$data['i1'],
                'i2'=>$data['i2']
            ]);
    }
    public function get(){
       return ScoreFaculty::all();
    }
    public function findById($id){
        return ScoreFaculty::find($id);
    }
}
