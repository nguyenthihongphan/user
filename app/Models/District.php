<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $table='district';
    protected $fillable=[
        // 'id',
        'name',
        'city_id',
    ];
    public function city(){
        return $this->belongsTo(City::class);
    }
}
