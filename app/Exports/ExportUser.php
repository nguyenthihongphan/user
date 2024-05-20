<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\Config;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportUser implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $data;
    public function __construct($data)
    {
        $this->data=$data;
    }
    public function collection()
    {
        $users= new User();
        $users=$users->search($this->data);
        if($users){
            $users= $users->map(function($user){
                if($user->birth!=''){
                    $user->birth= date('d/m/Y',strtotime($user->birth));
                }
                else{
                    $user->birth='';
                }
                $last_order = $user->order->last()->created_at??'';
                if($last_order!=''){
                    $last_order= date('d/m/Y',strtotime($last_order));
                }else{
                    $last_order='';
                }
                $roleAdmin= Config::get('constant.values.role.admin');
                $nameUser = Config::get('constant.values.name.user');
                $nameAdmin=Config::get('constant.values.name.admin');
                if($user->user_flg==$roleAdmin){
                    $user->user_flg=$nameAdmin;
                }else{
                    $user->user_flg=$nameUser;
                }
                return[
                    'id'=> $user->id,
                    'name'=> $user->firstname.' '.$user->lastname,
                    'email'=> $user->email,
                    'birth'=> $user->birth,
                    'phone'=> $user->phone,
                    'role'=> $user->user_flg,
                    'last_order'=> $last_order,

                ];
            });
            return $users;
        }else{
            return false;
        }
    }
}
