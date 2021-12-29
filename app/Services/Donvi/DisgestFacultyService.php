<?php
namespace App\Services\Donvi;
use App\DisgestFaculty;
class DisgestFacultyService{
    public function save(array $data, int $id = null){
        return DisgestFaculty::updateOrCreate(
            [
                'id'=>$id
            ],
            [
                'sum'=>$data['sum'],
                'disgest'=>$data['disgest'],
                'faculty_id'=>$data['faculty_id']
        ]);
    }
    public function findById($id){
        return DisgestFaculty::find($id);
    }
    public function delete($id){
        return DisgestFaculty::destroy($id);
    }
}
