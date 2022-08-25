<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\AuthorCollection;
use App\Http\Resources\AuthorResource;
use App\Models\Admin\Article;
use App\Models\Admin\Author;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function articleCount(){

        $articles = Article::withCount(['comment'])->get();
        return response(['data'=>$articles],200);
    }

    public function articleDetail(){
        
        $article = Article::with(['comment'=>function($q){
            $q->with('commentator');
        }])->get();
        return response(['data'=>$article],200);

    }

    public function articleHavingComment(){
        $articles = Article::has('comment')->get();
        return response(['data'=>$articles],200);
    }

    public function authorArticle(){
        return new AuthorCollection(Author::all());
    }
    
}
