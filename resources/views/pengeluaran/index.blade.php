@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card shadow">

        <div class="card-header bg-dark text-white d-flex justify-content-between">

            <h4>Data Pengeluaran</h4>

            <a href="/pengeluaran/create"
                class="btn btn-danger">

                Tambah Data

            </a>

        </div>

        <div class="card-body">

            <table class="table table-bordered">

                <tr>
                    <th>No</th>
                    <th>Barang</th>
                    <th>Jumlah</th>
                    <th>Tanggal</th>
                    <th>Tujuan</th>
                    <th>Aksi</th>
                </tr>

                @foreach($data as $d)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $d->barang->nama_barang }}</td>

                    <td>{{ $d->jumlah }}</td>

                    <td>{{ $d->tanggal_keluar }}</td>

                    <td>{{ $d->tujuan }}</td>

                    <td>

                        <a href="/pengeluaran/edit/{{ $d->id }}"
                            class="btn btn-warning btn-sm">

                            Edit

                        </a>

                        <form action="/pengeluaran/delete/{{ $d->id }}"
                            method="POST"
                            class="d-inline">

                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm">

                                Hapus

                            </button>

                        </form>

                    </td>

                </tr>

                @endforeach

            </table>

        </div>

    </div>

</div>

@endsection