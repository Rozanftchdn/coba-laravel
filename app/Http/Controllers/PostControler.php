<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\post;
use App\Models\user;

class PostControler extends Controller
{
    public function index()
    {
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')){
            $author = User::fristWhere('username', request('author'));
            $title = ' by '. $author->name;
        }
        return view('posts',[
            "title" => "All posts" . $title,
            "active"=>'posts',
            "posts" => post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);

    }
    public function show(Post $post)
    {
        return view('post', [
            "title" => "single post",
            "active"=>'posts',
            "post" => $post
    
        ]);
    }

}
