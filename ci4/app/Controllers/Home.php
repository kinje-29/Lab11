<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home',
    [
        'title' => 'Home',
        'content' => 'Ini adalah halaman contact yang menjelaskan tentang isi halaman ini.'
    ]);
    }
}
