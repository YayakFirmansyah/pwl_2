<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function products()
    {
        return view('products');
    }

    public function subproducts($id)
    {
        if ($id == 'marbel-edu-games') {
            return 'Ini adalah marbel-edu-games';
        } elseif ($id == 'marbel-and-friends-kids-games') {
            return 'Ini adalah marbel-and-friends-kids-games';
        } elseif ($id == 'riri-story-books') {
            return 'Ini adalah riri-story-books';
        } elseif ($id == 'kolak-kids-songs') {
            return 'Ini adalah kolak-kids-songs';
        }
    }

    public function news()
    {
        return view('news');
    }

    public function subnews($news)
    {
        return 'Ini adalah news dari ' . $news;
    }

    public function program()
    {
        return view('program');
    }

    public function subprogram($program)
    {
        if ($program == 'karir') {
            return 'Ini adalah Karir';
        } elseif ($program == 'magang') {
            return 'Ini adalah Magang';
        } elseif ($program == 'kunjungan-industri') {
            return 'Ini adalah Kunjungan Industri';
        }
    }

    public function about()
    {
        return view('about-us');
    }
}
