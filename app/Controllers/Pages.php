<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'about'
        ];
        return view("pages/about", $data);
    }

    public function daftar()
    {
        $data = [
            'title' => 'Daftar Wisuda'
        ];
        return view("pages/daftar", $data);
    }
}
