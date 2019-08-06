<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Portfolio;
use App\Quotes;
use App\About;
use App\Contact;
use App\Service;

class DashboardController extends Controller
{
    public static function index(){
        $posts = Post::all();
        $about = About::all();

        return view('dashboard', compact('posts','about'));
    }
    //
}
