<?php

namespace App;\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent;

class Barang extends Model
{
    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'satuan',
        'stock',
        'stock_minimum',

    ];
}
