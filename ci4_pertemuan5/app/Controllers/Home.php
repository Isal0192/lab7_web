<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function home(): string
    {
        return view('home',[ 
            'title' => 'About',
            'content' => 'ini adalah halaman about yang menjelaskan tentang isi halaman ini',
    ]);
    }
}