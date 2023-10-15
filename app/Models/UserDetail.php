<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $fillable = [


        "houseNo", "postCode", "email", "phone_no", "steps"

    ];



    public function property_detail(){
        return $this->hasOne(PropertyDetail::class);
    }
   
    public function booking_detail(){
        return $this->hasMany(BookingDetail::class);
    }

}
