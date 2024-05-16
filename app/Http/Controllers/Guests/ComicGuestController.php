<?php

namespace App\Http\Controllers\Guests;

use App\Models\Comic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



/* qui abbiamo solo i methos index e show perché é il controller per i guests quindi é solo per visualizare i comics, non per interaggire */
class ComicGuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('guests.welcome', ['comics'=>Comic::all()]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        //
        return view('guests.comics.show', compact('comic'));
    }
}
