<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

class HomeController extends Controller
{
    public function index() {
      $posts = Post::paginate(3);

      return view('home', compact('posts'));
    }
}
