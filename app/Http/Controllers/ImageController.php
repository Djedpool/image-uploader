<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        return view('images.index');
    }

    public function show()
    {
        // return all images
    }

    public function store()
    {
        // save the image to the database 
    }
}
