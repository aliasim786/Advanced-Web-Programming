<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{
function index()
{
    return view('films.index');
}

function create()
{
    return view('films.create');
}

function about()
{
    return view('films.about');
}
}

