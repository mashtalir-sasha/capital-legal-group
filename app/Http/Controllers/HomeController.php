<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'mailto' => 'priadka@spg.kiev.ua',
            'numbers' => \App\Models\MainNumbers::first(),
            'about' => \App\Models\MainAbout::first(),
            'team' => \App\Models\MainTeam::get(),
            'clients' => \App\Models\MainClients::first(),
            'reviews' => \App\Models\MainReviews::get(),
            'contacts' => \App\Models\Contacts::first(),
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
            'contacts' => \App\Models\Contacts::first(),
            'oferta' => \App\Models\Oferta::first(),
        ]);
    }

    public function konfident()
    {
        return view('konfident', [
            'mailto' => 'priadka@spg.kiev.ua',
            'contacts' => \App\Models\Contacts::first(),
            'polituka' => \App\Models\Konfident::first(),
        ]);
    }

}
