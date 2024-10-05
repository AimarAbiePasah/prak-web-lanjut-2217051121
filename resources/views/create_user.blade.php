<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Create User Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #6DD5FA, #2980B9); /* Gradien background */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.9); /* Warna latar belakang card */
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            padding: 40px;
        }

        .card {
            background: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1); /* Bayangan lembut */
            width: 350px;
            text-align: center;
        }

        h2 {
            margin-bottom: 30px;
            font-size: 24px;
            color: #333;
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        label {
            font-size: 14px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 30px; /* Membuat input form berbentuk oval */
            font-size: 16px;
            box-sizing: border-box;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        input[type="text"]:focus {
            outline: none;
            border-color: #2980B9;
            box-shadow: 0 0 8px rgba(41, 128, 185, 0.5); /* Warna fokus yang mirip */
        }

        button {
            background: #2980B9;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 30px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease, box-shadow 0.3s ease;
            margin-top: 20px;
            width: 100%;
        }

        button:hover {
            background: #2575C0;
            box-shadow: 0 10px 20px rgba(41, 128, 185, 0.3); /* Efek hover dengan bayangan */
        }

        /* Style untuk gambar */
        .image-container {
            margin-left: 30px;
        }

        .image-container img {
            width: 400px;
            height: auto;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        /* Responsif untuk tampilan mobile */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .image-container {
                margin-left: 0;
                margin-top: 20px;
            }

            .image-container img {
                width: 100%;
                max-width: 400px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h2>Create User</h2>
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" id="nama" name="nama" required>
                </div>

                <div class="form-group">
                    <label for="npm">NPM:</label>
                    <input type="text" id="npm" name="npm" required>
                </div>

                <div class="form-group">
                    <label for="kelas">Kelas:</label>
                    <input type="text" id="kelas" name="kelas" required>
                </div>

                <div class="form-group">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>

        <!-- Gambar di samping card -->
        <div class="image-container">
            <img src="https://niagaspace.sgp1.digitaloceanspaces.com/blog/wp-content/uploads/2023/04/03075503/salah-satu-langkah-dalam-cara-menjadi-web-developer-adalah-mempelajari-bahasa-untuk-coding-1024x792.webp" alt="Web Developer Image">
        </div>
    </div>
</body>
</html>
