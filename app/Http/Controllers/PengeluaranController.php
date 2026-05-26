<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    public function index()
    {
        $data = Pengeluaran::with('barang')->get();
        return view('pengeluaran.index', compact('data'));
    }

    public function create()
    {
        $barang = Barang::all();
        return view('pengeluaran.create', compact('barang'));
    }

    public function store(Request $request)
    {
        Pengeluaran::create($request->all());

        $barang = Barang::find($request->barang_id);
        $barang->stok -= $request->jumlah;
        $barang->save();

        return redirect('/pengeluaran');
    }

    public function edit($id)
    {
        $data = Pengeluaran::findOrFail($id);
        $barang = Barang::all();

        return view('pengeluaran.edit', compact('data','barang'));
    }

    public function update(Request $request, $id)
    {
        $data = Pengeluaran::findOrFail($id);

        $data->update($request->all());

        return redirect('/pengeluaran');
    }

    public function destroy($id)
    {
        $data = Pengeluaran::findOrFail($id);
        $data->delete();

        return redirect('/pengeluaran');
    }
}