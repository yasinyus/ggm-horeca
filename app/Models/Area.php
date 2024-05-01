<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'ao_name',
        'ro',
        'wo',
        'status',
    ];

    // public function teams()
    // {
    //     return $this->belongsTo(Team::class);
    // }

}
