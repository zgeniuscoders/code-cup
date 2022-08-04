<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Course;

class HomeController extends Controller
{
    /**
     * @return Response
     */
    public function index(): Response
    {
        $courses = Course::inRandomOrder()->take(6)->get();
        $posts = Blog::inRandomOrder()->take(6)->get();
        return response()->view("home.index", compact("courses", "posts"));
    }
}
