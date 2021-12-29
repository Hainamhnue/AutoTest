<?php
namespace App\Services\Admin;
use App\CriteriaUser;
class CriteriaUserService{
    public function save(array $data, int $id = null){
        return CriteriaUser::updateOrCreate(
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
        return CriteriaUser::all();
    }
    public function findById($id){
        return CriteriaUser::find($id);
    }
    public function delete($id){
        return CriteriaUser::destroy($id);
    }
    public function getCriteriaUser(){
        return CriteriaUser::where('i2',0)->get();
    }
    public function getCriteriaUser1(){
        return CriteriaUser::where('i2',1)->get();
    }
}
