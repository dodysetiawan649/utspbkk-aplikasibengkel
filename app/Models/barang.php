<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    protected $table = 'barangs';

    protected $fillable = [
        'supplier_id',
        'nama_barang',
        'merek',
        'harga',
        'stok',
        'satuan',
    ];

    public function supplier()
    {
        return $this->belongsTo(supplier::class, 'supplier_id');
    }
}
