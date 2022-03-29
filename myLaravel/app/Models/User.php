<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $fillable =['name','password','email','remember_token'];

    protected $attributes = array(
        'surname' => "don't have a surname" ,
        'password' => "0",
        'remember_token' => '0'
      );

    protected $primaryKey = "userid";
    use HasFactory;

    public function order(){
        return $this->hasMany(Order::class, "userid");
    }
}
