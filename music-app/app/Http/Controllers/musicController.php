<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\music;

class musicController extends Controller
{

    function index()
{
    $music = music::all();
    return view('music.index',['music' => $music]);
}

    function create()
    {
        return view('music.create');
    }

    function about()
    {
        return "About the amazing music app";
    }
    function store(Request $request)
{
    $music = new song();
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

}
