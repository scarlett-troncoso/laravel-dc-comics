<?php

namespace App\Http\Controllers\Guests;
use App\Models\Comic;
use Illuminate\Http\Guests\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    function index(){
        $comics = Comic::all();
        return view('welcome', compact('comics'));
    }
    /*
    function characters(){
        return 'characters';
    }

    function movies(){
        return 'movies';
    }

    function tv(){
        return 'tv';
    }

    function games(){
        return 'games';
    }

    function collectibles(){
        return 'collectibles';
    }

    function fans(){
        return 'fans';
    }

    function videos(){
        return 'videos';
    }

    function news(){
        return 'news';
    }

    function shop(){
        return 'shop';
    }*/
}
