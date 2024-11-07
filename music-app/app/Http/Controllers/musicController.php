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
