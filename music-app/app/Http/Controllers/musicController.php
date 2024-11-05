<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class musicController extends Controller
{

    function index()
    {
        return view('music.index');
    }

    function create()
    {
        return "Add a new song";
    }

    function about()
    {
        return "About the amazing music app";
    }
}