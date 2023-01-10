<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ArticleController extends Controller
{
    public static function index() {
        return view('article.index', [
            'articles' => Article::latest()->filter(request(['search', 'tag', 'author']))->paginate(6)->withQueryString(),
        ]);
    }
    public static function view(Article $slot) {
        return view('article.page', [
            'file' => $slot
        ]);
    }

    public static function addComment(Article $slot) {
        request()->validate([
            'body' => 'required'
        ]);

        $slot->comments()->create([
            'user_id' => request()->user()->id,
            'body' => request('body')
        ]);

        return back();
    }

    public static function create() {
        return view('article.create');
    }

    public static function addArticle()
    {
        $pathImg = request()->file('thumbnail')->store('img');
        $str = request('title');
        $delimiter = '-';
        $slug = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $str))))), $delimiter));
        request('slug', $slug);
        $attr = request()->validate([
            'title' => ['required', 'max:255', 'min:3'],
            'body' => ['required', 'max:5000'],
            'tags_id' => ['required', Rule::exists('tags', 'id')]
        ]);
        $attr['user_id'] = auth()->id();
        $attr['thumbnail'] = $pathImg;
        $attr['slug'] = $slug;
        $attr['excerpt'] = mb_strimwidth($attr['body'], 0, 200, '...');
        Article::create($attr);

        return redirect('/')->with('success', 'Ur Article was successfully created');
    }
}
