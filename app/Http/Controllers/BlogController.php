<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(){

        $blogs = Blog::latest()->get();
        return view('welcome',
        ['blogs' => $blogs,]);
    }
    public function create(){
        return view('create');
      }
    public function store(){
        $blog = new Blog();
        $blog->author = request('author');
        $blog->title=request('title');
        $blog->tags = request('category');
        $blog->blog= request('post');

        $blog->save();

        return redirect('/');
    }

}
