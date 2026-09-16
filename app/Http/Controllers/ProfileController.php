<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama = "Ikbal Feri", $npm = "2417051031", $kelas = "B") {
        $nama = $nama !== "" ? $nama : "Ikbal Feri";
        $npm = $npm !== "" ? $npm : "2417051031";
        $kelas = $kelas !== "" ? $kelas : "B";

        $data = [
            'nama' => $nama,
            'npm' => $npm,
            'kelas' => $kelas,
            'data' => [
                'nama' => $nama,
                'npm' => $npm,
                'kelas' => $kelas,
            ]
        ];

        return view('profile', $data);
    }
}