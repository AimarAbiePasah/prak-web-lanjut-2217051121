<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 3</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #a2d5f2, #d5f3fe); /* Latar belakang gradien biru */
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            display: flex;
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); /* Bayangan lembut */
            overflow: hidden;
            width: 900px; /* Ukuran lebih besar untuk menampung gambar dan form */
            max-width: 100%;
        }

        .card img {
            width: 400px; /* Mengatur gambar lebih besar */
            height: auto;
            object-fit: cover; /* Agar gambar terisi dengan baik tanpa distorsi */
            border-right: 2px solid rgba(0, 0, 0, 0.1);
        }

        .form-container {
            padding: 40px; /* Padding lebih besar */
            flex-grow: 1;
        }

        label {
            display: block;
            font-weight: 500;
            margin-top: 15px;
            color: #333;
            font-size: 16px; /* Ukuran font label diperbesar */
        }

        input[type="text"], select {
            width: 90%; /* Lebar input yang lebih besar */
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 20px;
            border-radius: 10px; /* Input lebih bulat */
            border: 1px solid #ccc;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
            font-size: 16px; /* Ukuran font input */
        }

        input[type="submit"] {
            background-color: #0d6efd;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 20px; /* Tombol bulat */
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            width: 90%; /* Lebar tombol sama dengan input */
        }

        input[type="submit"]:hover {
            background-color: #094ca1;
        }

        .text-danger {
            color: #ff0000;
            font-size: 12px;
            margin-top: -10px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="card">
        <img src="https://niagaspace.sgp1.digitaloceanspaces.com/blog/wp-content/uploads/2023/04/03075503/salah-satu-langkah-dalam-cara-menjadi-web-developer-adalah-mempelajari-bahasa-untuk-coding-1024x792.webp" alt="Foto Profil">

        <div class="form-container">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan Nama">
                @foreach($errors->get('nama') as $msg)
                <p class="text-danger">{{ $msg }}</p>
                @endforeach

                <label for="npm">NPM:</label>
                <input type="text" id="npm" name="npm" placeholder="Masukkan NPM">
                @foreach($errors->get('npm') as $msg)
                <p class="text-danger">{{ $msg }}</p>
                @endforeach

                <label for="id_kelas">Kelas :</label>
                <select name="kelas_id" id="kelas_id" required>
                    @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                    @endforeach
                </select>

                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>

</html>
