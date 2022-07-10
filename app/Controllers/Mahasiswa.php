<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    protected $mahasiswaModel;

    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
    }

    public function index()
    {

        $mahasiswa = $this->mahasiswaModel->findAll();
        $data = [
            "title" => "Mahasiswa",
            'mahasiswa' => $mahasiswa
        ];
        return view('mahasiswa/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Pendaftaran Wisudawan'
        ];

        return view('mahasiswa/create', $data);
    }
}
