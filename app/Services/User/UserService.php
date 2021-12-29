<?php
namespace App\Services\User;
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
                'password'=>$data['password'],
                'img'=>$data['img'],
                'phone'=>$data['phone'],
                'bomon'=>$data['bomon'],
                'introduction'=>$data['introduction'],
            ]);
    }
    public function findById($id){
        return  User::find($id);
    }
}
