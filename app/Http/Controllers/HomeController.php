<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $categories = Category::where('parent_category_id', null)->get();
        return view('home',compact('categories'));
    }
}
