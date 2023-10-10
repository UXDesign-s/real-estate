<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingDetail extends Model
{
    use HasFactory;

    protected $fillable = ["user_detail_id", "name", "email", "moblie_no", "meeting_date", "meeting_time", "meeting_branch" ] ;

    public function user_detail(){

        return $this->belongsTo(UserDetail::class);
    }
}
