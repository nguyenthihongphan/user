<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $userList=  User::paginate(6);
        return view('user.list',compact('userList'));
    }

    public function store(Request $request){     
        $data= $request->all();
         $users= new User();
         $users->add($data);
         return redirect()->route('listUser')->with('success','create user success');
    } 
    public function add(){
        return view('user.add');
    }
    public function edit($id){
        $userList= User::find($id);
        return view('user.edit', compact('userList'));

    }
    public function updateUser(Request $request,$id){
        $userList= User::find($id);
        $data =$request->all();
        if($request->hasFile('avatar'))
        {
            $file=$request->file('avatar');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move(public_path('storage/images'),$filename);
            $userList['avatar']="$filename";
        }else{
            unset($userList['avatar']);
        }
        $userList->updateUser($data);
        return redirect()->route('listUser')->with('success','user updated');
    }
    public function deleteUser(Request $request, $id){
        $userList = User::find($id);
        $userList->delete();
        return redirect()->route('listUser')->with('success');
    }
}
