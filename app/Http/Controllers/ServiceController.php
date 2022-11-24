<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function jurAut()
    {
        return view('jur-aut', [
            'blogContent' => \App\Models\BlogCategory::where('id', '1')->with('articles')->firstOrFail(),
            'mailto' => 'priadka@spg.kiev.ua',
        ]);
    }

    public function vurSpor()
    {
        return view('vurіshennja-sporіv', [
            'blogContent' => \App\Models\BlogCategory::where('id', '8')->with('articles')->firstOrFail(),
            'mailto' => 'priadka@spg.kiev.ua',
        ]);
    }

    public function dosudoveVur()
    {
        return view('dosudove-vurіshennja-sporiv', [
            'blogContent' => \App\Models\BlogCategory::where('id', '9')->with('articles')->firstOrFail(),
            'mailto' => 'priadka@spg.kiev.ua',
        ]);
    }

    public function gospSpor()
    {
        return view('gospodarski-spory', [
            'blogContent' => \App\Models\BlogCategory::where('id', '10')->with('articles')->firstOrFail(),
            'mailto' => 'priadka@spg.kiev.ua',
        ]);
    }

    public function adminSpor()
    {
        return view('administratyvni-spory', [
            'blogContent' => \App\Models\BlogCategory::where('id', '11')->with('articles')->firstOrFail(),
            'mailto' => 'priadka@spg.kiev.ua',
        ]);
    }

    public function korpPravo()
    {
        return view('korporatyvne-pravo', [
            'blogContent' => \App\Models\BlogCategory::where('id', '2')->with('articles')->firstOrFail(),
            'mailto' => 'priadka@spg.kiev.ua',
        ]);
    }

    public function vidkryttiaUkr()
    {
        return view('vidkryttia-biznesu-v-ukraini', [
            'blogContent' => \App\Models\BlogCategory::where('id', '3')->with('articles')->firstOrFail(),
            'mailto' => 'priadka@spg.kiev.ua',
        ]);
    }

    public function kupivliaKomp()
    {
        return view('kupivlia-hotovykh-kompanii', [
            'blogContent' => \App\Models\BlogCategory::where('id', '4')->with('articles')->firstOrFail(),
            'mailto' => 'priadka@spg.kiev.ua',
        ]);
    }

    public function zakryttiaBiz()
    {
        return view('zakryttia-biznesu', [
            'blogContent' => \App\Models\BlogCategory::where('id', '5')->with('articles')->firstOrFail(),
            'mailto' => 'priadka@spg.kiev.ua',
        ]);
    }

    public function vidkryttiaUsa()
    {
        return view('vidkryttia-biznesu-usa', [
            'blogContent' => \App\Models\BlogCategory::where('id', '6')->with('articles')->firstOrFail(),
            'mailto' => 'priadka@spg.kiev.ua',
        ]);
    }

    public function tendernePravo()
    {
        return view('tenderne-pravo', [
            'blogContent' => \App\Models\BlogCategory::where('id', '12')->with('articles')->firstOrFail(),
            'mailto' => 'priadka@spg.kiev.ua',
        ]);
    }

    public function podatkovePravo()
    {
        return view('podatkove-pravo', [
            'blogContent' => \App\Models\BlogCategory::where('id', '7')->with('articles')->firstOrFail(),
            'mailto' => 'priadka@spg.kiev.ua',
        ]);
    }

    public function mihratsiinePravo()
    {
        return view('mihratsiine-pravo', [
            'blogContent' => \App\Models\BlogCategory::where('id', '13')->with('articles')->firstOrFail(),
            'mailto' => 'priadka@spg.kiev.ua',
        ]);
    }

    public function otrymanniaIpn()
    {
        return view('otrymannia-ipn', [
            'blogContent' => \App\Models\BlogCategory::where('id', '14')->with('articles')->firstOrFail(),
            'mailto' => 'priadka@spg.kiev.ua',
        ]);
    }

    public function otrymanniaDoz()
    {
        return view('otrymannia-dozvolu', [
            'blogContent' => \App\Models\BlogCategory::where('id', '15')->with('articles')->firstOrFail(),
            'mailto' => 'priadka@spg.kiev.ua',
        ]);
    }

    public function otrymanniaPos()
    {
        return view('otrymannia-posvidky', [
            'blogContent' => \App\Models\BlogCategory::where('id', '16')->with('articles')->firstOrFail(),
            'mailto' => 'priadka@spg.kiev.ua',
        ]);
    }

    public function intelektVlasnist()
    {
        return view('intelektualna-vlasnist', [
            'blogContent' => \App\Models\BlogCategory::where('id', '17')->with('articles')->firstOrFail(),
            'mailto' => 'office@prima-veritas.ua',
        ]);
    }

    public function bukhhalterskyiAut()
    {
        return view('bukhhalterskyi-autsorsing', [
            'blogContent' => \App\Models\BlogCategory::where('id', '18')->with('articles')->firstOrFail(),
            'mailto' => 'priadka@spg.kiev.ua',
        ]);
    }

}
