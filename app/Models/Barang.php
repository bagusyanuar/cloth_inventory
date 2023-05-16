<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';

    protected $fillable = [
        'jenis_barang_id',
        'warna_id',
        'ukuran_id',
        'harga',
        'stok'
    ];

    public function jenis_barang()
    {
        return $this->belongsTo(JenisBarang::class, 'jenis_barang_id');
    }

    public function warna()
    {
        return $this->belongsTo(Warna::class, 'warna_id');
    }

    public function ukuran()
    {
        return $this->belongsTo(Ukuran::class, 'ukuran_id');
    }
}
