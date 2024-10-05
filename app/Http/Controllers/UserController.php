<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserControllerRequest; // Import UserControllerRequest
use App\Models\Kelas;
use App\Models\UserModel;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];

        return view('list_user', $data);
    }

    public function create()
    {
        // Mengambil data kelas menggunakan method getKelas
        $kelas = $this->kelasModel->getKelas();

        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }

    public function store(UserControllerRequest $request) // Menggunakan UserControllerRequest untuk validasi
    {
        // Data sudah tervalidasi melalui UserControllerRequest

        // Simpan data ke database
        $this->userModel->create([
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
            
        ]);

        // Redirect ke halaman daftar user
        return redirect()->to('/user'); // Menggunakan route name jika tersedia
    }
}
