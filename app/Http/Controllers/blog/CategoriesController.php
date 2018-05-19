<?php

namespace App\Http\Controllers\blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Article;
use App\Models\Comment;
use App\User;

class CategoriesController extends Controller{

	public function index(){

    $categories = Category::all();
      $articles = Article::select('id', 'title', 'intro_text')->orderBy('created_at', 'desc')->get();
    return view('blog.accueil', ['categories' => $categories, 'articles' => $articles, 'actif' => 0]);  
 
	}


	public function showpost(){
         $categories = Category::all();
         $categorie = Category::find($id);
         if($categorie) {
            $articles = $categorie->articles()->orderBy('created_at', 'desc')->get();
            return view('blog.accueil', array('categories' => $categories, 'articles' => $articles, 'actif' => $id));
	   }

	}
/*
  public function showart ($cat_id, $art_id){
    $categories = Category::all();
    $article = Article::find($art_id);
    if($article) {
        
        $comments = $article->comments()->orderBy('comments.created_at', 'desc')->join('users', 'users.id', '=', 'comments.user_id')->select('users.username', 'title', 'text', 'comments.created_at')->get();
        return view::make('blog.articles', array('categories' => $categories, 'articles' => $article, 'actif' => $cat_id, 'comments' => $comments));
    }
  }
  */
}
