<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $primaryKey = "orderid";

    protected $fillable =['products','Price','userid'];

    protected $casts = [
        'products' => 'array',
        ];

        public function payment(){
            return $this->hasMany(Payment::class, "paymenttype");
        }    
}
