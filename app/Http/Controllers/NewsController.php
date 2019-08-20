<?php

namespace App\Http\Controllers;

use App\News;
use App\Page;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    const PAGE_SIZE = 20;


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slug = 'news';
        $page = Page::where('slug', '=', $slug)->firstOrFail();

        $newsList = News::query()->latest()->paginate(self::PAGE_SIZE);
        return view('news.index', compact('newsList', 'page'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }
}
