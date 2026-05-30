<?php

namespace App\Http\Controllers;

use App\Barang;
use App\StokMasuk;
use Illuminate\Http\Request;

class StokMasukController extends Controller
{
    public function index()
    {
        $data = StokMasuk::with('barang')->get();

        return view('stok_masuk.index', compact('data'));
    }

    public function create()
    {
        $barang = Barang::all();

        return view('stok_masuk.create', compact('barang'));
    }

    public function store(Request $request)
    {
        StokMasuk::create($request->all());

        $barang = Barang::findOrFail($request->barang_id);
        $barang->stok += $request->jumlah;
        $barang->save();

        return redirect('/stok-masuk');
    }

    public function edit($id)
    {
        $data = StokMasuk::findOrFail($id);
        $barang = Barang::all();

        return view('stok_masuk.edit', compact('data', 'barang'));
    }

    public function update(Request $request, $id)
    {
        $data = StokMasuk::findOrFail($id);

        $data->update($request->all());

        return redirect('/stok-masuk');
    }

    public function destroy($id)
    {
        $data = StokMasuk::findOrFail($id);

        $data->delete();

        return redirect('/stok-masuk');
    }
}