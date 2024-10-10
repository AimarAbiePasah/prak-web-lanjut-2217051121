<!DOCTYPE html>
<html lang="en">
@extends('layouts.app')

@section('content')     
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form User</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f4f8; /* Warna background lebih netral */
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            background-color: #ffffff; /* Warna putih untuk kontras yang lebih baik */
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 20px 30px rgba(0, 0, 0, 0.1); /* Bayangan lebih halus */
            width: 400px; /* Lebar form yang lebih lebar */
            text-align: center;
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
            margin-top: 10px;
            margin-bottom: 15px;
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

        input[type="submit"] {
            background-color: #ddd;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 50px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: blue; /* Warna yang lebih cerah saat hover */
        }

        .text-danger {
            color: #ff0000;
            font-size: 12px;
            margin-top: -10px;
            margin-bottom: 10px;
        }

        @media (max-width: 500px) {
            .form-container {
                width: 90%; /* Responsif untuk perangkat kecil */
                padding: 30px;
            }
        }
    </style>
</head>

<body>

<div class="form-container">
    <h2>Formulir Pendaftaran User</h2>

    <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Anda" required><br>

        <label for="npm">NPM : </label>
        <input type="text" id="npm" name="npm" placeholder="Masukkan NPM" required><br>

        <label for="kelas">Kelas :</label>
        <select name="kelas_id" id="kelas_id" required>
            @foreach ($kelas as $kelasItem)
            <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
            @endforeach
        </select><br>

        <label for="foto">Foto Profil:</label><br>
        <input type="file" id="foto" name="foto" accept="image/*"><br><br>

        <input type="submit" value="Submit">
    </form>
</div>

@endsection
</body>

</html>
