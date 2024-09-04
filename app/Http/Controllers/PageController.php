<?php

namespace App\Http\Controllers;

use Illuminate\http\request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'Nama irel dan Nim 2241760117';
    }

    public function articles($id=null){
        {
                return 'Halaman Artikel dengan Id ' . $id;
        }
    }

}