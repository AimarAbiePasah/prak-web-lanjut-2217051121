@extends('layouts.app')

@section('content')
<style>
    /* Mengatur font dan latar belakang agar konsisten */
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #cfe2f3; /* Warna background lebih lembut */
        margin: 0;
        padding: 20px;
    }

    .table {
        border-radius: 10px;
        overflow: hidden;
        background-color: #fff5db; /* Warna background lembut */
        transition: transform 0.2s ease-in-out;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow lebih halus */
    }

    .table:hover {
        transform: scale(1.02); /* Efek zoom-in saat hover */
    }

    .table thead {
        background-color: #ff69b4; /* Warna pink cerah untuk header */
        color: #fff;
        font-size: 1.2rem;
    }

    .table-hover tbody tr:hover {
        background-color: #f9f9f9; /* Warna lembut saat di-hover */
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
    }

    .table td, .table th {
        vertical-align: middle;
        text-align: center;
        font-size: 1.1rem;
        padding: 10px;
        color: #333; /* Warna teks lebih gelap agar kontras */
        background-color: #fff; /* Warna background putih untuk seluruh kolom */
    }

    /* Responsif untuk tampilan mobile */
    @media (max-width: 768px) {
        .table {
            font-size: 0.9rem;
        }
    }
</style>

<div class="mb-3 mt-2 m-3">
    <a href="{{ route('user.create') }}" class="btn btn-success"><i class="fas fa-plus"></i>Tambah User</a>
</div>

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama</th>
            <th scope="col">NPM</th>
            <th scope="col">Kelas</th>
            <th scope="col">aksi</th>
            <!-- Menghapus kolom aksi -->
        </tr>
    </thead>
    <tbody class="table-group-divider">
    @foreach($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->nama }}</td>
        <td>{{ $user->npm }}</td>
        <td>{{ $user->nama_kelas }}</td>
        <td>
            <a href="{{ route('user.show', $user->id) }}" class="btn btn-primary">Detail</a>
        </td>
    </tr>
@endforeach

    </tbody>
</table>
@endsection