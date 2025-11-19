<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        $title = "Selamat Datang di Website Saya";
        return view('welcome', compact('title'));
    }

    public function showProfil()
    {
        $data = [
            'nama' => 'Moch Dhio Donovan',
            'status' => 'Mahasiswa UNM Teknik Elektro D4',
        ];

        return view('profil', $data);
    }

    public function showPengalaman()
    {
        $pengalaman = [
            'PKL di Telkom',
            'Mengerjakan desain web',
            'Membangun aplikasi laravel sederhana',
        ];

        return view('pengalaman', ['pengalaman' => $pengalaman]);
    }

    public function showKontak()
    {
        return view('kontak')->with([
            'email' => 'dhio@gmail.com',
            'nohp'  => '08123456789'
        ]);
    }
}
