<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\City;
use App\Models\District;
use Illuminate\Support\Facades\Validator;
use PSpell\Config;

class AuthController extends Controller
{
    public function index(){
        return view('auth.dashboard');
    }
    public function login(){
        if(Auth::check()){
            return redirect()->route('admin.index');
        }else{
            return view('auth.login');
        }
    }
    public  function register(Request $request){
        if(Auth::check()){
            return redirect()->route('admin.index');
        }else{
            $data=$request->session()->get('data');
            // $cities= new City();
            // $data['city']=$cities->getAll();
            return view('auth.register')->with('data',$data);
        }
    }
    public function createAccount(Request $request){
        $users = new User();
        $role= config('constant.values.role.admin');
        $data = $request->session()->get('data');
        $data['user_flg'] = $role;
        
        $acc =$users->register($request);
      
        if($acc==true){
            $messager01=config('constant.messages.E01');
            return redirect()->route('login',$messager01)->with('success','Create successfully');
        }else{
            $messager02=config('constant.messages.E02');
            return redirect()->route('register',$messager02)->with('error','email is existed');
        }

    }
    public function checkLogin(Request $request){
        
        if(Auth::check()){
            return redirect()->route('admin.index'); 
        }else{
            $user=User::where('email',$request->email)->first();
            if($user){
                if(Hash::check($request->password,$user->password)){
                    Auth::login($user);
                    return redirect()->route('admin.index');
                }else{
                    $messages04=config('constant.messages.E04');
                    return redirect()->route('login',$messages04)->with('error','Password is incorrect');
                }
            }else{
                $messages05=config('constant.messages.E05');
                return redirect()->route('login',$messages05)->with('error','Email is incorrect');
                    
            }
        }
    }
    public function logout( Request $request){
        Auth::logout();
        $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('login');
        
    }
    // public function confirm(Request $request){
    //     $data = $request->all();
    //     $userControll = new User();
    //     $pattern = "/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/";
    //     $validated_data = Validator::make($data, [
    //         'password' => 'regex:'.$pattern,
    //     ])->validate();
    //     if($validated_data == true){
    //         $data['password'] = Hash::make($data['password']);
    //         $checkEmail = $userControll ->checkEmail($data['email']);
            
    //         if($checkEmail == false){
    //             $request->session()->put('data', $data);
    //             return redirect()->route('confirmRegister')->with('sucess');
    //         } else {              
    //             $messageE01 = config('constant.messages.E01');
    //             return redirect()->route('register')->with('error', $messageE01);
    //         }
    //     }
    //     else {
    //         $messageE02 = config('constant.messages.E02');
    //         return redirect()->route('register')->with('error', $messageE02);
    //     }
    // }

    // public function confirmRegister(Request $request){
    //     $data = $request->session()->get('data');
    //     $CityControl = new City();
    //     $allName = $CityControl->getAllNameById($data['city'], $data['district']);
    //     $data['city_name'] = $allName['city_name'];
    //     $data['district_name'] = $allName['district_name'];
    //     $request->session()->put('data', $data);
    //     if($data == null){
    //         return redirect()->route('register');
    //     } else {
    //         return view('auth.confirm', compact('data'));
    //     }

    // }
    // public function getDistrict(Request $request)
    // {   $data = $request->all();
    //             $data['district']= District::where("city_id",$request->city_id)->get(["name", "id"]);

    //     return response()->json($data);
// }
}
