<?php

namespace App;

use TCG\Voyager\Traits\Resizable;
use Illuminate\Database\Eloquent\Model;

class Lawyer extends Model
{
	use Resizable;
	
    protected $table = 'lawyers';

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
