<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie; 
use App\Models\Article; 

class ArticleController extends Controller
{
    public function create()
{
    $categories = Categorie::all();
    return view('articles.create', compact('categories'));
}


    public function store(Request $request)
{
    $article = new Article();
    $article->titre = $request->input('titre');
    $article->resume = $request->input('resume');
    $article->contenu = $request->input('contenu');
    $article->categorie_id = $request->input('categorie_id');
    $article->save();

    
    return redirect()->action([ArticleController::class, 'create']);
}

    public function show()
{
    $articles = Article::with('categorie')->paginate(10);
    return view('articles.show', compact('articles'));
}

    public function retail($id)
    {
        $article = Article::find($id);
        return view('articles.retail', compact('article'));
    }
}
