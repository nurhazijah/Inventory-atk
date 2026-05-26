@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card shadow">

        <div class="card-header bg-warning text-white">
            <h4>Edit Pengeluaran</h4>
        </div>

        <div class="card-body">

            <form action="/pengeluaran/update/{{ $data->id }}"
                method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">

                    <label>Barang</label>

                    <select name="barang_id"
                        class="form-control">

                        @foreach($barang as $b)

                        <option value="{{ $b->id }}"
                            {{ $data->barang_id == $b->id ? 'selected' : '' }}>

                            {{ $b->nama_barang }}

                        </option>

                        @endforeach

                    </select>

                </div>

                <div class="mb-3">

                    <label>Jumlah</label>

                    <input type="number"
                        name="jumlah"
                        value="{{ $data->jumlah }}"
                        class="form-control">

                </div>

                <div class="mb-3">

                    <label>Tanggal Keluar</label>

                    <input type="date"
                        name="tanggal_keluar"
                        value="{{ $data->tanggal_keluar }}"
                        class="form-control">

                </div>

                <div class="mb-3">

                    <label>Tujuan</label>

                    <input type="text"
                        name="tujuan"
                        value="{{ $data->tujuan }}"
                        class="form-control">

                </div>

                <button class="btn btn-success">

                    Update

                </button>

            </form>

        </div>

    </div>

</div>

@endsection