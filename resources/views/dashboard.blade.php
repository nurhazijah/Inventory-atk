<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Inventory ATK</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background-color: #f4f6f9;
        }

        .sidebar{
            width: 250px;
            height: 100vh;
            position: fixed;
            background-color: #1f2937;
            padding-top: 20x;
        }

        .sidebar h3{
            color: white;
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar a{
            display: block;
            color: white;
            padding: 12px 20px;
            text-decoration: none;
        }

        .sidebar a:hover{
            background-color: rgba(255,255,255,0.2);
        }

        .content{
            margin-left: 250px;
            padding: 20px;
        }

        .card-dashboard{
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .table-container{
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h3>Inventory ATK</h3>

        <a href="#">Dashboard</a>
        <a href="#">Data Barang</a>
        <a href="#">Barang Masuk</a>
        <a href="#">Barang Keluar</a>
        <a href="#">Kategori</a>
        <a href="#">Laporan</a>
    </div>

    <!-- Content -->
<div class="content">

    <div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h2>Dashboard</h2>
        <p class="text-muted">
            Selamat Datang di Sistem Inventory ATK
        </p>
    </div>

    <div class="d-flex gap-2">

        <button class="btn btn-primary">
            + Tambah Barang
        </button>

        <button class="btn btn-danger">
            Logout
        </button>

    </div>

</div>

    <!-- Card -->
    <div class="row mb-4">

        <div class="col-md-3">
            <div class="card card-dashboard bg-primary text-white">
                <div class="card-body">
                    <h5>Total Barang</h5>
                    <h2>120</h2>
                    <p>Data seluruh barang</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card card-dashboard bg-success text-white">
                <div class="card-body">
                    <h5>Barang Masuk</h5>
                    <h2>35</h2>
                    <p>Bulan ini</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card card-dashboard bg-danger text-white">
                <div class="card-body">
                    <h5>Barang Keluar</h5>
                    <h2>20</h2>
                    <p>Bulan ini</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card card-dashboard bg-warning text-white">
                <div class="card-body">
                    <h5>Stok Menipis</h5>
                    <h2>7</h2>
                    <p>Perlu restock</p>
                </div>
            </div>
        </div>

    </div>

    <!-- Informasi -->
    <div class="row mb-4">

        <div class="col-md-6">
            <div class="table-container">
                <h5>Informasi</h5>

                <ul>
                    <li>Pastikan stok barang selalu diperbarui</li>
                    <li>Lakukan pengecekan barang setiap minggu</li>
                    <li>Catat barang masuk dan keluar</li>
                </ul>
            </div>
        </div>

        <div class="col-md-6">
            <div class="table-container">
                <h5>Notifikasi</h5>

                <div class="alert alert-warning">
                    Stok Kertas A4 hampir habis
                </div>

                <div class="alert alert-danger">
                    Pulpen warna merah tersisa 3 pcs
                </div>
            </div>
        </div>

    </div>

  <!-- Data Barang -->
<div class="table-container">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h4 class="fw-bold">Data Barang Terbaru</h4>
            <p class="text-muted mb-0">
                Daftar barang terbaru pada sistem inventory
            </p>
        </div>

        <input 
            type="text" 
            class="form-control w-25" 
            placeholder="Cari barang..."
        >

    </div>

    <div class="table-responsive">

        <table class="table align-middle">

            <thead style="background-color:#f1f5f9;">

                <tr>
                    <th>No</th>
                    <th>Barang</th>
                    <th>Kategori</th>
                    <th>Stok</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                </tr>

            </thead>

            <tbody>

                <tr>
                    <td>1</td>

                    <td>
                        <div class="fw-semibold">
                            Pulpen
                        </div>

                        <small class="text-muted">
                            BRG001
                        </small>
                    </td>

                    <td>ATK</td>

                    <td>
                        <span class="fw-bold">
                            50
                        </span>
                    </td>

                    <td>17 Mei 2026</td>

                    <td>
                        <span class="badge rounded-pill bg-success px-3 py-2">
                            Tersedia
                        </span>
                    </td>
                </tr>

                <tr>
                    <td>2</td>

                    <td>
                        <div class="fw-semibold">
                            Buku Tulis
                        </div>

                        <small class="text-muted">
                            BRG002
                        </small>
                    </td>

                    <td>ATK</td>

                    <td>
                        <span class="fw-bold">
                            30
                        </span>
                    </td>

                    <td>17 Mei 2026</td>

                    <td>
                        <span class="badge rounded-pill bg-success px-3 py-2">
                            Tersedia
                        </span>
                    </td>
                </tr>

                <tr>
                    <td>3</td>

                    <td>
                        <div class="fw-semibold">
                            Kertas A4
                        </div>

                        <small class="text-muted">
                            BRG003
                        </small>
                    </td>

                    <td>Kertas</td>

                    <td>
                        <span class="fw-bold text-danger">
                            5
                        </span>
                    </td>

                    <td>17 Mei 2026</td>

                    <td>
                        <span class="badge rounded-pill bg-danger px-3 py-2">
                            Menipis
                        </span>
                    </td>
                </tr>

            </tbody>

        </table>

    </div>

</div>
</body>
</html>