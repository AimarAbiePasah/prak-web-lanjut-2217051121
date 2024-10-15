@extends('layouts.app')

@section('content')
<style>
    .btn-list-user {
        margin-inline: 107px; /* Custom margin inline for button placement */
        background-color: #28a745;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        text-decoration: none;
        display: inline-block;
    }

    .btn-list-user:hover {
        background-color: #218838;
        color: white;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f0f4f8; /* Warna background lebih netral */
        margin: 0;
        padding: 20px; /* Menambah padding untuk menjaga tampilan */
    }

    .form-container {
        background-color: #ffffff; /* Warna putih untuk kontras yang lebih baik */
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0px 20px 30px rgba(0, 0, 0, 0.1); /* Bayangan lebih halus */
        max-width: 400px; /* Lebar form yang lebih lebar */
        margin: 20px auto; /* Memusatkan form */
        transition: all 0.3s ease-in-out;
    }

    .form-container:hover {
        transform: translateY(-5px); /* Efek hover */
        box-shadow: 0px 30px 40px rgba(0, 0, 0, 0.15);
    }

    h2 {
        color: #3b3f5c; /* Warna heading yang lebih gelap */
        margin-bottom: 30px;
        font-size: 24px;
        text-align: center; /* Memusatkan teks */
    }

    .form-group {
        margin-bottom: 20px; /* Menambah jarak antar elemen form */
    }

    label {
        display: block;
        font-weight: 500;
        margin-top: 10px;
        text-align: left;
        color: #333;
    }

    input[type="text"], select, input[type="file"] {
        width: 100%;
        padding: 12px;
        border-radius: 8px;
        border: 1px solid #ddd;
        font-size: 14px;
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }

    input[type="text"]:focus, select:focus, input[type="file"]:focus {
        outline: none;
        border-color: #ff69b4;
        box-shadow: 0 0 5px rgba(255, 105, 180, 0.5);
    }

    input[type="submit"], button {
        background-color: #28a745; /* Menggunakan warna tombol yang sama */
        color: white;
        border: none;
        padding: 12px 20px;
        border-radius: 50px;
        cursor: pointer;
        font-size: 16px;
        width: 100%;
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover, button:hover {
        background-color: #218838; /* Warna yang lebih cerah saat hover */
    }

    @media (max-width: 500px) {
        .form-container {
            width: 90%; /* Responsif untuk perangkat kecil */
            padding: 30px;
        }
    }
</style>

<div class="container">
    <!-- Tombol List User -->
    

    <div class="form-container">
        <h2>Formulir Pendaftaran User</h2>

        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Anda" required>
            </div>

            <div class="form-group">
                <label for="npm">NPM:</label>
                <input type="text" id="npm" name="npm" placeholder="Masukkan NPM" required>
            </div>

            <div class="form-group">
                <label for="kelas_id">Kelas:</label>
                <select name="kelas_id" id="kelas_id" required>
                    <option value="" disabled selected>Pilih Kelas</option>
                    @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="foto">Foto Profil:</label>
                <input type="file" id="foto" name="foto" accept="image/*">
            </div>
            <input type="submit" value="Simpan">
            <br>
            <br>
            <a href="{{ route('user.list') }}" class="btn-list-user">List User</a>
        </form>
    </div>
</div>
@endsection
