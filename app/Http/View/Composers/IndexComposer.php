<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\News;
use App\Project;

class IndexComposer
{

    protected $latestNews;
    protected $projects;
    const NEWS_PAGE_SIZE = 3;
    const PROJECTS_PAGE_SIZE = 6;


    /**
     *
     * @return void
     */
    public function __construct()
    {
        $this->latestNews = News::query()->latest()->paginate(self::NEWS_PAGE_SIZE);
        $this->projects = Project::query()->latest()->paginate(self::PROJECTS_PAGE_SIZE);
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
        $view->with('projects', $this->projects);
    }
}