<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function index(): View
    {
        $articles = Article::all();

        return view('articles.index', compact('articles'));
    }
    public function create(): View
    {
        return view('articles.create');
    }
    public function store(Request $request): RedirectResponse
    {
        Article::create($request->all());

        return redirect()->route('articles.index')->with('success', 'Article created successfully');
    }

    public function edit(Article $article): View
    {
        return view('articles.edit', compact('article'));
    }
    public function update(Request $request, Article $article): RedirectResponse
    {
        $article->update($request->all());

        return redirect()->route('articles.index')->with('success', 'Article update successfully');
    }
    public function destroy(Article $article):RedirectResponse
    {
        $article->delete();

        return redirect()->route('article.index')->with('success','Article deleted succesfully');
    }
    public function show(Article $article): View
    {
        return view('articles.show', compact('article'));
    }
}
