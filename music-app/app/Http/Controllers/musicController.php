<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\music;

class musicController extends Controller
{
    public function search(Request $request)
{
    $query = $request->input('query');
    return view('songs.index', compact('music'));
}


public function index(Request $request)
{
    // Get the search query from the request
    $search = $request->input('search');

    // If a search query exists, filter by title or artist, else show all
    $music = Music::when($search, function ($query, $search) {
        return $query->where('title', 'like', '%' . $search . '%')
                     ->orWhere('artist', 'like', '%' . $search . '%');
    })
    ->paginate(5); // Adjust the number of items per page as needed

    return view('music.index', compact('music', 'search'));
}


    function create()
    {
        return view('music.create');
    }

    function about()
    {
        return view('music.about');
    }
    function store(Request $request)
{
    $music = new music();
    $music->title = $request->title;
    $music ->Artist = $request->Artist;
    $music ->duration = $request->duration;
    $music ->save();
    return redirect('/music');
}
function show($id)
{
    $music = music::find($id);
    return view('music.show', ['music' => $music]);
}
function edit($id)
    {
        $music = music::find($id);
        return view('music.edit', ['music' => $music]);
    }
    function update(Request $request)
    {
        $music = music ::find($request->id);
        $music ->title = $request->title;
        $music ->Artist = $request->Artist;
        $music ->duration = $request->duration;
        $music ->save();
        return redirect('/music');
    }

    function destroy(Request $request){
        $music  = music::find($request->id);
        $music ->delete();
        return redirect('/music');
    }

}
