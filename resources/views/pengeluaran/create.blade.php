@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card shadow">

        <div class="card-header bg-danger text-white">
            <h4>Tambah Pengeluaran</h4>
        </div>

        <div class="card-body">

            <form action="/pengeluaran/store" method="POST">

                @csrf

                <div class="mb-3">

                    <label>Barang</label>

                    <select name="barang_id"
                        class="form-control">

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

                    <label>Tanggal Keluar</label>

                    <input type="date"
                        name="tanggal_keluar"
                        class="form-control">

                </div>

                <div class="mb-3">

                    <label>Tujuan</label>

                    <input type="text"
                        name="tujuan"
                        class="form-control">

                </div>

                <button class="btn btn-success">

                    Simpan

                </button>

            </form>

        </div>

    </div>

</div>

@endsection