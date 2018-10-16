<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'intro','body', 'alias'];

    public function getRouteKeyName()
    {
        return 'alias';
    }
}
