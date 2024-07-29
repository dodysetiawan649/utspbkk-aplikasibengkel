<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kendaraan extends Model
{
    use HasFactory;
    protected $table = 'kendaraans';

    protected $fillable = [
        'no_pol',
        'no_mesin',
        'merek',
        'warna', 
    ];
}
