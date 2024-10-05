@extends('layouts.app')

@section('content')

<style>
    body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: flex-start; /* Ubah dari center ke flex-start agar tombol dan tabel berada di bawah */
        min-height: 100vh; /* Ubah height ke min-height agar halaman bisa menyesuaikan panjang konten */
        margin: 0;
        background-color: #a2d5f2;
    }

    .container {
        margin-top: 50px; /* Menambahkan jarak antara container dengan bagian atas halaman */
        width: 80%; /* Mengatur lebar container agar tidak terlalu lebar */
        background-color: #fff; /* Memberikan background putih pada container */
        padding: 20px; /* Memberikan sedikit padding pada container */
        border-radius: 10px; /* Membuat sudut container menjadi rounded */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan untuk efek lebih elegan */
    }

    .table-responsive {
        margin-top: 20px; /* Memberikan jarak antara tombol "Tambah User" dan tabel */
    }

    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 14px;
        transition: background-color 0.3s ease;
    }

    .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }

    .table-hover tbody tr:hover {
        background-color: #f1f1f1;
    }

    .table th, .table td {
        vertical-align: middle; /* Agar konten dalam tabel terlihat rata */
    }
</style>

<div class="container mt-4">
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('user.create') }}" class="btn btn-success">Tambah User</a>
    </div>
    <div class="table-responsive">
        <table class="table table-hover table-bordered text-center">
            <thead class="table-secondary">
                <tr>
                    <th scope="col"><b>ID</b></th>
                    <th scope="col"><b>Nama</b></th>
                    <th scope="col"><b>NPM</b></th>
                    <th scope="col"><b>Kelas</b></th>
                    <th scope="col"><b>Aksi</b></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['nama'] }}</td>
                    <td>{{ $user['npm'] }}</td>
                    <td>{{ $user['nama_kelas'] }}</td>
                    <td>
                        <!-- Add action buttons if needed -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
