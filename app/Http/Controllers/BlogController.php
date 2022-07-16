<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class BlogController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('blog.blogs', [
            'articles' => $articles
        ]);
    }

    public function show($id){

        $article = Article::findOrFail($id);


        // $articles = [
        //     1 => 'Mon titre 1',
        //     2 => 'Mon titre 2'
        // ];

        // $article = $articles[$id] ?? 'Article non définis';

        return view('blog.blog', [
            'article' => $article
        ]);
    }
}
