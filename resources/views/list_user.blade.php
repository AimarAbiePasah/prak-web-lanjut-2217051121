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

    /* Styling untuk foto profil */
    .profile-img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #8EACCD; /* Border untuk foto */
    }

    /* Responsif untuk tampilan mobile */
    @media (max-width: 768px) {
        .table {
            font-size: 0.9rem;
        }
    }
</style>

<div class="container">
    <h2>Daftar User</h2>
    <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah User Baru</a>
    
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <td>{{ $user->id }}</td>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->npm }}</td>
                <td>{{ $user->nama_kelas }}</td>
                <td>
                    <img src="{{ asset('storage/uploads/' . $user->foto) }}" class="profile-img" alt="Foto {{ $user->nama }}">
                </td>
                <td>
                    <div class="action-buttons">
                        <a href="{{ route('user.show', $user->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
