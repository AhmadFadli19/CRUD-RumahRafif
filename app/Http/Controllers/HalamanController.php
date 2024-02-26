<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    function index()
    {
        return view("halaman/index");
    }

    function tentang()
    {
        return view("halaman/tentang");
    }
    function kontak()
    {
        $judul = 'Halaman Kontak';
        $data = [
            'judul' => 'ini adalah Halaman Kontak',
            'kontak'=> [
                'email' => 'ayamurok@gmail.com',
                'Youtube' => 'http://www.youtube.com'
            ]
        ];
        return view("halaman/kontak")->with($data);
    }
    
}
