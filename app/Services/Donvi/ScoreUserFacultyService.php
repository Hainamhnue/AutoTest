<?php
namespace App\Services\Donvi;
use App\ScorePersonalFaculty;
class ScoreUserFacultyService{
    public function save(array $data, int $id = null){
        return ScorePersonalFaculty::updateOrCreate(
            [
                'id'=>$id
            ],
            [
                'i1'=>$data['i1'],
                'user_id'=>$data['user_id'],
                'faculty_id'=>$data['faculty_id'],
            ]);
    }
    public function getAll(){
        return ScorePersonalFaculty::all();
    }
    public function findById($id){
        return ScorePersonalFaculty::find($id);
    }
}
