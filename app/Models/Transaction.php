<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    // protected $guarded = ["id"];

    protected $fillable = [
        'outlet_id',
        'user_id',
        'city',
        'stempel',
    ];

}
