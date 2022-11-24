<?php

namespace App\Models;


class post 
{
    private static $blog_posts = 
    [
        [
            "title"=> "judul post pertama",
            "slug" => "judul-post-pertama",
            "author"=> "Ahmdrozan",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit distinctio dignissimos asperiores. "
        ],
        [
            "title"=> "judul post kedua",
            "slug" => "judul-post-kedua",
            "author"=> "apedd",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. "
        ],
    ];
 public   static function all()
 {
    return collect (self ::$blog_posts);
 }
 public static function find ($slug)
 {
     $posts = static :: all();
     
     return $posts->firstwhere('slug', $slug);
 }
}