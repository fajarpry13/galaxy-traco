<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $articles = Article::where('status','active')
        ->latest()
        ->get();

    return view ('pages.home',compact('articles'));
    }

    
}
