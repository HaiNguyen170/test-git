<?php

namespace App\Http\Controllers;
use App\Article;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Requests\ArticleFormRequest;

class ArticleController extends Controller
{
    //
    public function index()
    {
        $article = Article::paginate(4);
        return view('article.index', compact('article'));
    }

    public function show($id){
        $article = Article::find($id);
        return view('article.show')->with('article',$article);
    }

    public function create()
    {
        return view('article.create');
    }

    public  function  store(ArticleFormRequest $request){
        $title = $request->input('title');
        $content = $request->input('content');
        Article::create([
            'title' => $title,
            'content' => $content,
        ]);
        return redirect()->route('article.index');

    }
    public function edit($id){
        $article = Article::find($id);
        return view('article.edit', compact('article'));
    }

    public function update($id, ArticleFormRequest $request){
        $article = Article::find($id);
        $article->update([
            'title' =>$request->get('title'),
            'content' =>$request->get('content'),
        ]);
        return redirect()->route('article.index');
    }

    public function destroy($id){
        $article = Article::find($id);
        $article ->delete();

        return redirect()->route('article.index');

    }


}
