<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keluhan extends Model
{
    use HasFactory;
    protected $table = 'keluhan';

    protected $fillable = [
        'nama_keluhan',
        'ongkos',
        'no_pol',
        'customers_id',
        'id_pegawai',
    ];
}
