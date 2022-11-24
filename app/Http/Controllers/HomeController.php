<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'mailto' => 'priadka@spg.kiev.ua',
        ]);
    }

    public function dev()
    {
        return view('dev');
    }

    public function oferta()
    {
        return view('oferta', [
            'mailto' => 'priadka@spg.kiev.ua',
        ]);
    }

    public function konfident()
    {
        return view('konfident', [
            'mailto' => 'priadka@spg.kiev.ua',
        ]);
    }

}
