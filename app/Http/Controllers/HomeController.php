<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $data = array('title' => 'Homepage');
        return view('home.index', $data);
    }
    public function about() {
        $data = array('title' => 'Tentang Kami');
        return view('home.about', $data);
    }

    public function kontak() {
        $data = array('title' => 'Kontak Kami');
        return view('home.kontak', $data);
    }
}
