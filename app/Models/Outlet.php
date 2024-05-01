<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
            'unicode',
            'area_id',
            'outlet',
            'tipe',
            'transaction',
            'reedem',
            'alamat',
            'program_start',
            'program_stop',
            'status',
            'link',
    ];

    // public function filters()
    // {
    //     return $this->hasMany(Filter::class);
    // }
}
