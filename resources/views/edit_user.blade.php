@extends('layouts.app')

@section('content')     
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #D2E0FB;
            background-image: url("https://4kwallpapers.com/images/wallpapers/windows-11-dark-mode-abstract-background-black-background-3840x2160-8710.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            background-color: #FEF9D9;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 20px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
            text-align: center;
            transition: all 0.3s ease-in-out;
            max-height: 90vh; /* Ensure it's not too tall */
            overflow-y: auto; /* Enable scrolling inside the form */
        }

        .form-container:hover {
            transform: translateY(-5px);
            box-shadow: 0px 30px 40px rgba(0, 0, 0, 0.15);
        }

        h2 {
            color: #3b3f5c;
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

        input[type="text"], select, input[type="file"], input[type="number"] {
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

        input[type="text"]:focus, select:focus, input[type="file"]:focus, input[type="number"]:focus {
            outline: none;
            border-color: #ff69b4;
            box-shadow: 0 0 5px rgba(255, 105, 180, 0.5);
        }

        button[type="submit"] {
            background-color: #8EACCD;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 50px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #0066cc;
        }

        .text-danger {
            color: #ff0000;
            font-size: 12px;
            margin-top: -10px;
            margin-bottom: 10px;
        }

        .card-img-top {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-top: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Media query for tablets and larger screens */
        @media (min-width: 768px) {
            .form-container {
                width: 450px;
                padding: 40px;
            }
        }

        /* Media query for smaller screens like mobile phones */
        @media (max-width: 500px) {
            .form-container {
                width: 90%;
                padding: 30px;
            }

            h2 {
                font-size: 20px;
            }

            button[type="submit"] {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

<div class="form-container">
    <form action="{{ route('user.update', $user['id']) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <h2>Edit User</h2>
        
        <!-- Nama -->
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="{{ old('nama', $user->nama) }}" required>
        @foreach($errors->get('nama') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
        
        <!-- Kelas -->
        <label for="kelas_id">Kelas:</label>
        <select name="kelas_id" id="kelas_id" required>
            @foreach ($kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}" {{ $kelasItem->id == $user->kelas_id ? 'selected' : '' }}>
                    {{ $kelasItem->nama_kelas }}
                </option>
            @endforeach
        </select>
        
        <!-- Jurusan -->
        <label for="jurusan">Jurusan:</label>
        <select name="jurusan" id="jurusan" required>
            <option value="" disabled>Pilih Jurusan</option>
            <option value="fisika" {{ $user->jurusan == 'fisika' ? 'selected' : '' }}>Fisika</option>
            <option value="kimia" {{ $user->jurusan == 'kimia' ? 'selected' : '' }}>Kimia</option>
            <option value="biologi" {{ $user->jurusan == 'biologi' ? 'selected' : '' }}>Biologi</option>
            <option value="matematika" {{ $user->jurusan == 'matematika' ? 'selected' : '' }}>Matematika</option>
            <option value="ilmu komputer" {{ $user->jurusan == 'ilmu komputer' ? 'selected' : '' }}>Ilmu Komputer</option>
        </select>

        <!-- Fakultas -->
        <label for="fakultas_id">Fakultas:</label>
        <select name="fakultas_id" id="fakultas_id" required>
            <option value="" disabled>Pilih Fakultas</option>
            @foreach ($fakultas as $fakultasItem)
                <option value="{{ $fakultasItem->id }}" {{ $fakultasItem->id == $user->fakultas_id ? 'selected' : '' }}>
                    {{ $fakultasItem->nama_fakultas }}
                </option>
            @endforeach
        </select>

        <!-- Semester -->
        <label for="semester">Semester:</label>
        <input type="number" id="semester" name="semester" value="{{ old('semester', $user->semester) }}" min="1" max="14" required>

        <!-- Foto Profil -->
        <label for="foto">Foto Profil:</label>
        <input type="file" id="foto" name="foto" accept="image/*">
        @if($user->foto)
            <img src="{{ asset('storage/uploads/' . $user->foto) }}" class="card-img-top" alt="Foto Profil">
        @endif

        <button type="submit">Simpan</button>
    </form>
</div>

</body>
@endsection
