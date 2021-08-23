<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'user_id',
        'status',
        'payment_method',
        'payment_status',
        'address'
    ];
}
