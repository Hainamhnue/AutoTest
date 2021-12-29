<?php
namespace App\Services\Admin;
use App\CriteriaFaculty;
class CriteriaFacultyService{
    public function save(array $data, int $id = null){
        return CriteriaFaculty::updateOrCreate(
            [
                'id'=>$id
            ],
            [
                'name'=>$data['name'],
                'i1'=>$data['i1'],
                'i2'=>$data['i2']
            ]);
    }
    public function getAll(){
        return CriteriaFaculty::all();
    }
    public function findById($id){
        return CriteriaFaculty::find($id);
    }
    public function delete($id){
        return CriteriaFaculty::destroy($id);
    }
    public function getCriteriaFaculty(){
        return CriteriaFaculty::where('i2',0)->get();
    }
    public function getCriteriaFaculty1(){
        return CriteriaFaculty::where('i2',1)->get();
    }
}
