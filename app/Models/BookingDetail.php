<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BookingDetail extends Model
{
    use HasFactory;

    protected $fillable = ["user_detail_id", "ref_no", "name", "email", "mobile_no", "meeting_date", "meeting_time", "meeting_branch" ] ;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // Generate a unique reference number
            $model->ref_no = 'GLREF-' . now()->format('mdHi') . Str::random(5);

            // Ensure it's unique in case of a collision
            while (static::where('ref_no', $model->ref_no)->exists()) {
                $model->ref_no = 'GLREF-' . now()->format('mdHi') . Str::random(5);
            }
        });
    }


    public function user_detail(){

        return $this->belongsTo(UserDetail::class);
    }
}
