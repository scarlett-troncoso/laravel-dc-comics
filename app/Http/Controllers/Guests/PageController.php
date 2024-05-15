<?php

namespace App\Http\Controllers\Guests;
use App\Models\Comic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    function index(){
        $comics = Comic::all();
        return view('welcome', compact('comics'));
    }
}
