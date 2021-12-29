<?php
namespace App\Services\User;
use App\ScorePersonal;
use App\DisgestUser;
class ScoreUserService{
    public function save(array $data, int $id = null){
        return ScorePersonal::updateOrCreate(
            [
                'id'=>$id
            ],
            [
                'user_id'=>$data['user_id'],
                'i1'=>$data['i1']
            ]);
    }
    public function getAll(){
        return ScorePersonal::all();
    }
    public function findById($id){
        return ScorePersonal::find($id);
    }



}
