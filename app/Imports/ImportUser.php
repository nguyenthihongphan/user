<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;

class ImportUser implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $roleAdmin= Config::get('constant.values.role.admin');
        $roleUser=Config::get('constant.values.role.user');
        $nameAdmin=Config::get('constant.values.name.admin');
        $user= new User();
        $checkEmail= $user->checkEmail($row['email']);
        if($checkEmail){
            return false;
        }else{
            $password = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrtuvwxyzABCDEFGHIJKLMNOPQRTUVWXYZ',ceil(10/strlen($x)))),1,10);
            $password= Hash::make($password);
            $nameRole=strtolower($row['role']);
            $date=str_replace('/','-',$row['birth']);
            $date=date('Y-m-d',strtotime($date));
            if($nameRole == $nameAdmin){
                $role=$roleAdmin;
            }else{
                $role=$roleUser;
            }
            if($row['deleted']== TRUE){
                $deleted_by=0;
                $deleted_at= date('Y-m-d H:i:s');
            }
            if($row['deleted']==FALSE){
                $deleted_by=null;
                $deleted_at=null;
            }
            if($row['id']==null){
                return new User([
                    'firstname'=>$row['firstname'],
                    'lastname'=>$row['lastname'],
                    'email'=>$row['email'],
                    'birth'=>$date,
                    'user_flg'=>$role,
                    'password'=>$password,
                    'deleted_by'=>$deleted_by,
                    'deleted_at'=>$deleted_at,
                ]);
            }else{
                return new User([
                    'id'=>$row['id'],
                    'firstname'=>$row['firstname'],
                    'lastname'=>$row['lastname'],
                    'email'=>$row['email'],
                    'birth'=>$date,
                    'user_flg'=>$role,
                    'password'=>$password,
                    'deleted_by'=>$deleted_by,
                    'deleted_at'=>$deleted_at,
                ]);
            }    
       }    
   }
}