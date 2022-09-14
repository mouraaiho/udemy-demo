<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ajaxController extends Controller
{
    //
    public function loadContent()
    {
        return view('ajax.load_content')->render();
    }
}
