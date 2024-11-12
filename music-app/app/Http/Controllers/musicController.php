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
    // Validation rules
    $validate = $request->validate([
        'title' => 'required|string|max:255',
        'Artist' => 'required|string|max:255', 
        'duration' => 'required|numeric|min:1',
    ]);

    // Creating a new music record
    $music = new Music();
    $music->title = $request->title;
    $music->Artist = $request->Artist;
    $music->duration = $request->duration;
    $music->save();

    // Redirect to the music list or the appropriate page
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
    // Validation rules
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'Artist' => 'required|string|max:255',
        'duration' => 'required|numeric|min:1', 
    ]);

    // Find the music record by ID
    $music = Music::find($request->id);

    // Check if music record exists
    if ($music) {
        // Update fields
        $music->title = $request->title;
        $music->Artist = $request->Artist;
        $music->duration = $request->duration;

        // Save the updated record
        $music->save();
    } else {
        // Handle the case where music is not found (optional)
        return redirect('/music')->with('error', 'Music record not found');
    }

    // Redirect to the music list or another page
    return redirect('/music')->with('success', 'Music updated successfully');
}


    function destroy(Request $request){
        $music  = music::find($request->id);
        $music ->delete();
        return redirect('/music');
    }

}
