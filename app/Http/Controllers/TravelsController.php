<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TravelsController extends Controller
{
    public function create()
    {
        return view('create-travel');
    }

    public function store()
    {
        return view('amazing');
    }
}
