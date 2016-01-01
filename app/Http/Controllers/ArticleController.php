<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:article-list|article-create|article-update|article-delete');
        $this->middleware('permission:article-create', ['only' => ['create','store']]);
        $this->middleware('permission:article-update', ['only' => ['edit','update']]);
        $this->middleware('permission:article-delete', ['only' => ['destroy', 'show']]);
    }

    public function index()
    {
        $article    = Article::latest('id')->get();
        return view('article.index', compact('article'));
    }

    public function create()
    {
        $category = Category::pluck('category_name', 'id');

        return view('article.create', compact('category'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'article_title'         => 'required|unique:articles',
            'article_description'   => 'required',
            'article_category'      => 'required',
            'article_images'        => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $image = $request->file('article_images');

        $images_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/article'), $images_name);
        $data = array(
            'article_title'         => $request->article_title,
            'article_description'   => $request->article_description,
            'article_category'      => $request->article_category,
            'article_images'        => $images_name
        );

        Article::create($data);

        return redirect('/article')->with('success', 'Success create article');
    }

    public function edit($id)
    {
        $article    = Article::findOrFail($id);
        $category   = Category::pluck('category_name', 'id');
        $categories = $article->category->pluck('category_name', 'id');

        return view('article.edit', compact('article', 'category', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $images_name = $request->hidden_image;
        $image = $request->file('article_images');
        if($image != '')
        {
            $request->validate([
                'article_title'         => 'required',
                'article_description'   => 'required',
                'article_category'      => 'required',
                'article_images'        => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $images_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/article'), $images_name);
        }
        else
        {
            $request->validate([
                'article_title'         => 'required',
                'article_description'   => 'required',
                'article_category'      => 'required',
                'article_images'        => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        }

        $data = array(
            'article_title'         => $request->article_title,
            'article_description'   => $request->article_description,
            'article_category'      => $request->article_category,
            'article_images'        => $images_name
        );

        Article::whereId($id)->update($data);

        return redirect('/article')->with('success', 'Succress update article');
    }

    public function destroy($id)
    {
        Article::findOrFail($id);
    }

    public function show($id)
    {
        $article          = Article::findOrFail($id);
        $article_find_id  = Article::whereId($id)->first();
        $article_images   = $article_find_id->article_images;
        $article_delete   = $article->delete();

        if($article_delete)
        {
            unlink(public_path('images/article/' .$article_images));
            return redirect('/article')->with('success', 'Success delete article');
        }
    }
}
