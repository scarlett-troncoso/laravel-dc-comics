<?php

namespace App\Http\Controllers;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function index(){
        $comics = Comic::all();
        return view('welcome', compact('comics'));
    }
}
