<?php

namespace App\Http\Controllers\Client\Home;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('client.home.index');
    }
}
