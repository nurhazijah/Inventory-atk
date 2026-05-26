<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    protected $fillable = [
        'barang_id',
        'jumlah',
        'tanggal_keluar',
        'tujuan'
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}