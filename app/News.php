<?php

namespace App;

class News extends \TCG\Voyager\Models\Post
{
    protected $table = 'posts';

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
