<?php

namespace App\Http\Controllers;

use App\Exports\ExportUser;
use App\Imports\ImportUser;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;

class SearchController extends Controller
{
    public function search(Request $request){
        $data = $request->only('email', 'phone', 'user_flg', 'birth','orderFrom','orderTo');
        $userModel= new User();
        //check exit
        if(!isset($data['email'])){
            $data['email']='';
        }
        if(!isset($data['phone'])){
            $data['phone']='';
        }
        if(!isset($data['birth'])){
            $data['birth']='';
        }
        if(!isset($data['user_flg'])){
            $data['user_flg']='';
        }
        if(!isset($data['orderFrom'])){
            $data['orderFrom']='';
        }
        if(!isset($data['orderTo'])){
            $data['orderTo']='';
        }
     $users=$userModel->search($data);
     $mesages=config('constant.messages.E03');
     return view('user.search')->with('users',$users)->with('success',$mesages)->with('data',$data);
    }
    public function importUser(Request $request){
        $data=$request->all();
        dd($data);
        // $userModel= new User();
        // $name = $userModel->getFullName($request->user()->id);
        Excel::import(new ImportUser,$data['file']);
        return redirect()->route('search')->with('success','import success');
    }   
    public function exportCSV(Request $request){
        $data = $request->only('email', 'phone', 'user_flg', 'birth','orderFrom','orderTo');
        return Excel::download(new ExportUser($data),'users.csv');

    }
}
