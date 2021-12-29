<?php
namespace App\Services\Admin;
use App\InforFaculty;
use App\User;

class InforFacultyService{
    public function save(array $data, int $id = null){
        return InforFaculty::updateOrCreate(
            [
                'id'=>$id
            ],
            [
                'name'=>$data['name'],
                'email'=>$data['email'],
                'password'=>bcrypt('12345678'),
                'img'=>$data['img'],
                'introduction'=>$data['introduction']
            ]);
    }
    public function saveAD(array $data, int $id = null){
        return User::updateOrCreate(
            [
                'id'=>$id
            ],
            [
                'name'=>$data['name'],
                'email'=>$data['email'],
                'img'=>$data['img'],
                'password'=>bcrypt('12345678'),
                'faculty_id'=>$data['faculty_id'],
                'isdonvi'=>true,
                'isuser'=>false
            ]);
    }
    public function getAll(){
        return InforFaculty::all();
    }
    public function findById($id){
        return InforFaculty::find($id);
    }
    public function delete($id){
        return InforFaculty::destroy($id);
    }
}
