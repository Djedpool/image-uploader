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
        // validate the incoming file
        // save the file in storage
        // create image model
        // return that image model back to frontend
    }
}
