<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Good Job</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;

            background: url('https://wallpapercave.com/wp/wp5424185.jpg') no-repeat center center fixed;
            background-size: cover; /* Membuat background sesuai layar */
        }

        .profile-container {
            text-align: center;
            background: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 400px; /* Memperlebar card agar foto lebih menonjol */
            position: relative;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .profile-container:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.15);
        }

        .profile-container img {
            display: block;
            margin: 0 auto;
            width: 180px; /* Ukuran lebih besar */
            height: 180px; /* Ukuran lebih besar */
            margin-bottom: 20px;
           
        }

        .info {
            background-color: rgba(240, 240, 240, 0.8);
            margin: 15px 0;
            padding: 15px;
            border-radius: 10px;
            font-size: 18px;
            color: #000; /* Mengubah warna teks menjadi hitam */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        strong {
            color: #000; /* Warna teks hitam untuk nama, kelas, dan NPM */
        }

        /* Form Card Styling */
        .form-card {
            margin-top: 30px;
            text-align: left;
        }

        .form-card label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-card input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-bottom: 15px;
            font-size: 16px;
        }

        .form-card button {
            width: 100%;
            padding: 10px;
            background-color: #0d6efd;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        .form-card button:hover {
            background-color: #0b5ed7;
        }
    </style>
</head>

<body>
    <div class="profile-container">
        <img src="https://static-00.iconduck.com/assets.00/laravel-icon-1990x2048-xawylrh0.png" alt="Foto Profil">
        <div class="info">
            <strong>Nama:</strong> <?= $nama ?>
        </div>
        <div class="info">
            <strong>NPM:</strong> <?= $npm ?>
        </div>
        <div class="info">
            <p><strong>Kelas:</strong> <?= $nama_kelas ?? 'Kelas tidak ditemukan' ?></p>
        </div>
    </div>
</body>
</html>
