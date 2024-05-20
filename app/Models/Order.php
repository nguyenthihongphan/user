<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\Contracts\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'orders';
    protected $primaryKey='id';
    protected $fillable=[
        'user_id',
        'note',
        'created_by',
        'created_at',
        'updated_by',
        'updated_at',
        'deleted_by',
        'deleted_at',
    ];
    public function user(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }
    public function last(){
        return Order::orderBy('create_at','desc')->first();
    }
}
