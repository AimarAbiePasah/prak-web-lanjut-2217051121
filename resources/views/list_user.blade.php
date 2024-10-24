@extends('layouts.app')

@section('content')
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #cfe2f3; /* Soft background color */
        margin: 0;
        padding: 20px;
    }

    .table {
        border-radius: 10px;
        overflow: hidden;
        background-color: #fff5db; /* Soft table background */
        transition: transform 0.2s ease-in-out;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .table:hover {
        transform: scale(1.02); /* Zoom effect */
    }

    .table thead {
        background-color: #ff69b4; /* Bright pink header */
        color: #fff;
        font-size: 1.2rem;
    }

    .table-hover tbody tr:hover {
        background-color: #f9f9f9; /* Lighter background on hover */
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
    }

    .table td, .table th {
        vertical-align: middle;
        text-align: center;
        font-size: 1.1rem;
        padding: 10px;
        color: #333; /* Darker text color for contrast */
        background-color: #fff; /* White background for columns */
    }

    .profile-img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #8EACCD; /* Border for profile picture */
    }

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
                <th>Kelas</th> <!-- Adding Kelas column -->
                <th>Jurusan</th>
                <th>Fakultas</th>
                <th>Semester</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->kelas->nama_kelas ?? '-' }}</td> <!-- Displaying Kelas -->
                <td>{{ $user->jurusan }}</td>
                <td>{{ $user->fakultas->nama_fakultas ?? '-' }}</td>
                <td>{{ $user->semester }}</td>
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
