<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StokMasuk extends Model
{
    protected $fillable = [
        'barang_id',
        'jumlah',
        'tanggal_masuk',
        'keterangan'
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}