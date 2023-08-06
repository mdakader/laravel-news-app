<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $breakingNews = News::all();
        return view('frontend.home', compact('breakingNews'));
    }
}
