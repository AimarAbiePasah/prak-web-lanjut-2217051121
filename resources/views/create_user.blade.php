@extends('layouts.app')

@section('content')
<style>
    .btn-list-user {
        margin-inline: 107px;
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
        background-color: #f0f4f8;
        margin: 0;
        padding: 20px;
    }

    .form-container {
        background-color: #ffffff;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0px 20px 30px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        margin: 20px auto;
        transition: all 0.3s ease-in-out;
    }

    .form-container:hover {
        transform: translateY(-5px);
        box-shadow: 0px 30px 40px rgba(0, 0, 0, 0.15);
    }

    h2 {
        color: #3b3f5c;
        margin-bottom: 30px;
        font-size: 24px;
        text-align: center;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        font-weight: 500;
        margin-top: 10px;
        text-align: left;
        color: #333;
    }

    input[type="text"], select, input[type="file"], input[type="number"] {
        width: 100%;
        padding: 12px;
        border-radius: 8px;
        border: 1px solid #ddd;
        font-size: 14px;
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }

    input[type="text"]:focus, select:focus, input[type="file"]:focus, input[type="number"]:focus {
        outline: none;
        border-color: #ff69b4;
        box-shadow: 0 0 5px rgba(255, 105, 180, 0.5);
    }

    input[type="submit"], button {
        background-color: #28a745;
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
        background-color: #218838;
    }

    @media (max-width: 500px) {
        .form-container {
            width: 90%;
            padding: 30px;
        }
    }
</style>

<div class="container">
    <div class="form-container">
        <h2>Formulir Pendaftaran User</h2>

        <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Anda" required>
            </div>

            <label for="kelas">Kelas :</label>
        <select name="kelas_id" id="kelas_id" required>
            @foreach ($kelas as $kelasItem)
            <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
            @endforeach
        </select><br>

            <div class="form-group">
                <label for="jurusan">Jurusan:</label>
                <select name="jurusan" id="jurusan" required>
                    <option value="" disabled selected>Pilih Jurusan</option>
                    <option value="fisika">Fisika</option>
                    <option value="kimia">Kimia</option>
                    <option value="biologi">Biologi</option>
                    <option value="matematika">Matematika</option>
                    <option value="ilmu komputer">Ilmu Komputer</option>
                </select>
            </div>

            <div class="form-group">
                <label for="fakultas_id">Fakultas:</label>
                <select name="fakultas_id" id="fakultas_id" required>
                    <option value="" disabled selected>Pilih Fakultas</option>
                    @foreach ($fakultas as $fakultasItem)
                        <option value="{{ $fakultasItem->id }}">{{ $fakultasItem->nama_fakultas }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="semester">Semester:</label>
                <input type="number" id="semester" name="semester" min="1" max="14" placeholder="Masukkan Semester (1-14)" required>
            </div>

            <div class="form-group">
                <label for="foto">Foto Profil:</label>
                <input type="file" id="foto" name="foto" accept="image/*">
            </div>

            <button type="submit">Simpan</button>
        </form>
    </div>
</div>
@endsection
