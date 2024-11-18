<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function mainBlog()
    {
        $blogs = Blog::where('is_published', 1)->orderBy('id', 'desc')->with('categories')->get();

        return view('home', compact('blogs'));
    } 

    public function index()
    {
        $blogs = Blog::where('is_published', 1)->orderBy('id', 'desc')->with('categories')->get();

        return view('blogs.index', compact('blogs'));
    } 

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->with('categories')->first();

        $blogs = Blog::where('is_published', 1)->orderBy('id', 'desc')->with('categories')->get();


        return view('blogs.show', compact('blog','blogs')); 
    }

}
