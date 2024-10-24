<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #D2E0FB;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image: url("https://4kwallpapers.com/images/wallpapers/windows-11-dark-mode-abstract-background-black-background-3840x2160-8710.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
        .profile-container {
            background-color: #FEF9D9;
            padding: 40px;
            border-radius: 10px;
            max-width: 400px;
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }
        .info-box {
            background-color: #8EACCD;
            color: white;
            border-radius: 50px;
            padding: 10px 0;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <img src="{{ asset('storage/uploads/' . $user->foto) }}" class="profile-img" alt="Profile Picture">
        <h1>Profil User</h1>

        <div class="info-box">
            <p><strong>Nama:</strong> {{ $user->nama }}</p>
        </div>
        <div class="info-box">
            <p><strong>Kelas:</strong> {{ $user->kelas->nama_kelas ?? 'Kelas tidak ditemukan' }}</p>
        </div>
        <div class="info-box">
            <p><strong>Jurusan:</strong> {{ $user->jurusan ?? 'Jurusan tidak ditemukan' }}</p>
        </div>
        <div class="info-box">
            <p><strong>Fakultas:</strong> {{ $user->fakultas->nama_fakultas ?? 'Fakultas tidak ditemukan' }}</p>
        </div>
        <div class="info-box">
            <p><strong>Semester:</strong> {{ $user->semester }}</p>
        </div>
    </div>
</body>
</html>
