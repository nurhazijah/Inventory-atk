@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4>Tambah Stok Masuk</h4>
        </div>

        <div class="card-body">

            <form action="/stok-masuk/store" method="POST">
                @csrf

                <div class="mb-3">
                    <label>Barang</label>

                    <select name="barang_id" class="form-control">
                        <option value="">-- Pilih Barang --</option>

                        @foreach($barang as $b)

                        <option value="{{ $b->id }}">
                            {{ $b->nama_barang }}
                        </option>

                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label>Jumlah</label>

                    <input type="number"
                        name="jumlah"
                        class="form-control">
                </div>

                <div class="mb-3">
                    <label>Tanggal Masuk</label>

                    <input type="date"
                        name="tanggal_masuk"
                        class="form-control">
                </div>

                <div class="mb-3">
                    <label>Keterangan</label>

                    <textarea name="keterangan"
                        class="form-control"></textarea>
                </div>

                <button class="btn btn-success">
                    Simpan
                </button>

            </form>

        </div>
    </div>

</div>

@endsection