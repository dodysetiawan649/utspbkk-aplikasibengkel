<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    use HasFactory;
    protected $table = 'customers';

    protected $fillable = [
        'no_pol',
        'nama_customer',
        'alamat',
        'jenis_kelamin',
    ];
}
