<?php
namespace App\Services\Donvi;
use App\User;
class UserService{
    public function save(array $data, int $id = null){
        return User::updateOrCreate(
            [
                'id'=>$id
            ],
            [
                'name'=>$data['name'],
                'email'=>$data['email'],
                'password'=>bcrypt('12345678'),
                'img'=>'1588491774_HNUE.jpg',
                'bomon'=>$data['bomon'],
                'faculty_id'=>$data['faculty_id']
            ]);
    }
    public function getAll($id){
        return User::where([
            ['isUser','=',1],
            ['faculty_id','=',$id]
        ])->get();
    }
    public function findById($id){
        return User::find($id);
    }
    public function delete($id){
        return User::destroy($id);
    }
}
