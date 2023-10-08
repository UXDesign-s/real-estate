<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyDetail extends Model
{
    use HasFactory;

    protected $fillable = [

        "property_type", "bedrooms", "rent_length", "user_detail_id", "postCode", "houseNo", "points_analysed", "radius", "average_price", "raw_data",
    ];


    
    public function user_detail(){

        return $this->belongsTo(UserDetail::class);
    }

}
