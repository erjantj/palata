<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Callback extends Model
{
    protected $table = 'callback';
    protected $fillable = [
    	'name', 'phone_number',
    ];
}
