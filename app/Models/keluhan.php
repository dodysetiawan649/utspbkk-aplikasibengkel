<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keluhan extends Model
{
    use HasFactory;
    protected $table = 'keluhans';

    protected $fillable = [
        'nama_keluhan',
        'ongkos',
        'no_pol',
        'customer_id',
        'pegawai_id',
    ];

    public function customer()
    {
        return $this->belongsTo(customers::class, 'customer_id');
    }

    public function pegawai()
    {
        return $this->belongsTo(pegawai::class, 'pegawai_id');
    }
}
