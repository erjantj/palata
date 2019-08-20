<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\News;

class FooterComposer
{

    protected $latestNews;
    const NEWS_PAGE_SIZE = 3;


    /**
     *
     * @return void
     */
    public function __construct()
    {
        $this->latestNews = News::query()->latest()->paginate(self::NEWS_PAGE_SIZE);
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('latestNews', $this->latestNews);
    }
}