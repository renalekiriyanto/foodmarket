<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id', 'food_id', 'quantity', 'total', 'status',
        'payment_url'
    ];

    public function getTimestampAttribute($value)
    {
        return Carbon::parse($value)->timestamp;
    }
}
