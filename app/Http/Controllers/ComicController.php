<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 
       // dd(Comic::all());
       return view('admin.comics.index', ['comics'=>Comic::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);

        $val_data = $request->validate([
            'title' => 'required|max:200',
            'description' => 'required|min:10', 
            'thumb' => 'required|max:255', 
            'price' => 'required|max:6', 
            'series' => 'required|max:255', 
            'sale_date' => 'required', 
            'type' => 'required|max:250'
        ]);

        // $data = $request->all();
        $comic = Comic::create($val_data);

        return to_route('comics.show', $comic);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
       // dd($comic);
        return view('admin.comics.show', compact('comic')); //appure: ['comic'=> $comic]
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        // dd($comic) //in pagina lo devo vedero con URL: http://127.0.0.1:8000/admin/houses/1/edit

        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        // dd($request->all(), $comic);
        $val_data = $request->validate([
            'title' => 'required|max:200',
            'description' => 'required|min:10', 
            'thumb' => 'required|max:255', 
            'price' => 'required|max:6', 
            'series' => 'required|max:255', 
            'sale_date' => 'required', 
            'type' => 'required|max:250'
        ]);

        // $comic->update($request->all());
        $comic->update($val_data);
        return to_route('comics.index'); // to_route('comics.index') perche??
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        // dd($comic);
        $comic->delete();
        return to_route('comics.index');
    }
}
