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
        'nama_customers',
        'alamat',
        'no_hp',
        'jenis_kelamin',
    ];

    public function keluhan()
    {
        return $this->hasOne(keluahan::class, 'customer_id');
    }
}
