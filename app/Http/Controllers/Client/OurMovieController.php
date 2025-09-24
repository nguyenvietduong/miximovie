<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class OurMovieController extends Controller
{
    const PATH_VIEW = 'client.ourMovie.';

    public function index()
    {

        return view(self::PATH_VIEW . __FUNCTION__);
    }
}
