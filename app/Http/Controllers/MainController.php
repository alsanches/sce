<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
    public function index()
    {
        $titulo = "Home";
        return view('main.index', compact('titulo'));
    }
}
