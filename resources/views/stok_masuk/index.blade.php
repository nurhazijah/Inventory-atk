@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card shadow">

        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">

            <h4 class="mb-0">Data Stok Masuk</h4>

            <a href="/stok-masuk/create"
                class="btn btn-primary">

                Tambah Data

            </a>

        </div>

        <div class="card-body">

            <table class="table table-bordered table-hover">

                <thead class="table-secondary">

                    <tr>
                        <th>No</th>
                        <th>Barang</th>
                        <th>Jumlah</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>

                </thead>

                <tbody>

                    @foreach($data as $d)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $d->barang->nama_barang }}</td>

                        <td>{{ $d->jumlah }}</td>

                        <td>{{ $d->tanggal_masuk }}</td>

                        <td>

                            <a href="/stok-masuk/edit/{{ $d->id }}"
                                class="btn btn-warning btn-sm">

                                Edit

                            </a>

                            <form action="/stok-masuk/delete/{{ $d->id }}"
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

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection