<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    use HasFactory;
    protected $table = 'suppliers';

    protected $fillable = [
        'nama_supplier',
        'alamat',
        'no_hp',
    ];

    public function single_supplier()
    {
        return $this->hasOne(barang::class, 'supplier_id');
    }

    public function all_supplier()
    {
        return $this->hasMany(barang::class, 'supplier_id');
    }
}
