<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawais';

    protected $fillable = [
        'nama_pegawai',
        'alamat',
        'jabatan', 
        'status',
    ];

    public function keluhan()
    {
        return $this->hasOne(keluahan::class, 'customer_id');
    }
}
