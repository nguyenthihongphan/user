<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
        'user_flg',
        'phone',
        'address',
        'birth',
        'avatar',
        'information',
        // 'created_by',
        // 'created_at',
        // 'updated_at',
        'deleted_by',
        'deleted_at',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function register($data){
        $checkEmail = User::where('email', $data['email'])->first(); 
        if (!$checkEmail) {
            $this->firstname = $data['firstname'];
            $this->lastname = $data['lastname'];
            $this->user_flg = 1;
            $this->email = $data['email'];
            $this->phone = $data['phone'];
            $this->address = $data['address'];
            $this->birth = $data['birth'];
            $this->avatar = $data['avatar'];
            $this->information = $data['information'];
            $this->password = Hash::make($data['password']);
            $this->created_by = 1;
            $this->save();
            return true;
        } else {
            return false;
        }
    }

    public function checkEmail($email){
        $checkEmail = User::where('email', $email)->first();
        if($checkEmail){
            return true;
        } else {
            return false;
        }
    }
    public function add($data){
        $this->firstname=$data['firstname'];
        $this->lastname=$data['lastname'];
        $this->email=$data['email'];
        $this->phone=$data['phone'];
        $this->birth=$data['birth'];
        $this->user_flg=$data['user_flg'];
        $this->address=$data['address'];
        $this->information=$data['information'];
        $this->password=Hash::make($data['password']);
        $this->save();
    }
    public function updateUser($data){
        $this->firstname=$data['firstname'];
        $this->lastname=$data['lastname'];
        $this->email=$data['email'];
        $this->phone=$data['phone'];
        $this->birth=$data['birth'];
        $this->user_flg=$data['user_flg'];
        $this->address=$data['address'];
        $this->information=$data['information'];
        $this->password=Hash::make($data['password']);
        $this->save();
        return true;
    }
    // public function order(){
    //     return $this->hasMany('App\Models\Order', 'user_id', 'id');
    // }
    public function order(){
        return $this->hasMany('App\Models\Order','user_id','id');
    }
    // public function getFullName($id){
    //     $fullname = User::find($id);
    //     if($fullname){
    //         return $fullname->firstname.' '.$fullname->lastname;
    //     } else {
    //         return false;
    //     }
    // }
    public function getFullname($id){
        $fullname = User::find($id);
        if($fullname){
            return $fullname->firstname.' '.$fullname->lastname;
        }else{
            return false;
        }

    }
    public function search($word){
        $result =User::query();
        if($word['email'] !=null){
            $result=$result->where('email','LIKE',"%" .$word['email']. "%");
        }
        if($word['birth'] !=null){
            $result=$result->where('birth','LIKE',"%" .$word['birth']. "%");
        }
        if($word['user_flg'] !=null){
            $result=$result->where('user_flg','LIKE',"%" .$word['user_flg']. "%");
        }
        if($word['phone'] !=null){
            $result=$result->where('phone','LIKE',"%" .$word['phone']. "%");
        }
        if($word['orderFrom']!=null && $word['orderTo']!=null){
            $result= $result->whereHas('order',function($query) use ($word){
                $query->whereBetween('created_at',[$word['orderFrom'],$word['orderTo']]);
            });
        }
        if($word['orderTo']){
            $result= $result->where('created_at','>=',$word['orderFrom']);
            $result = $result->with(['order'=> function($query){
                $query->orderBy('created_at','desc');
            }]);
        }
        else{
            return $result->get();

        }
        return $result->paginate(10);
    }
  
    
    
}
