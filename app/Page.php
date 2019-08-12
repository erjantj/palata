<?php

namespace App;

class Page extends \TCG\Voyager\Models\Page
{
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
