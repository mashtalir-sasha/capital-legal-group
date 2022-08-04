<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function jurAut()
    {
        return view('jur-aut');
    }

    public function vurSpor()
    {
        return view('vurіshennja-sporіv');
    }

    public function dosudoveVur()
    {
        return view('dosudove-vurіshennja-sporiv');
    }

    public function gospSpor()
    {
        return view('gospodarski-spory');
    }

    public function adminSpor()
    {
        return view('administratyvni-spory');
    }

    public function korpPravo()
    {
        return view('korporatyvne-pravo');
    }

    public function vidkryttiaUkr()
    {
        return view('vidkryttia-biznesu-v-ukraini');
    }

    public function kupivliaKomp()
    {
        return view('kupivlia-hotovykh-kompanii');
    }

    public function zakryttiaBiz()
    {
        return view('zakryttia-biznesu');
    }

    public function vidkryttiaUsa()
    {
        return view('vidkryttia-biznesu-usa');
    }

}
