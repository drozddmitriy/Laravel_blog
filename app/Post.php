<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 * @package App
 *
 * @property string $title
 * @property string $intro
 * @property string $body
 * @property string $alias
 */
class Post extends Model
{
    protected $fillable = ['title', 'intro','body', 'alias'];

    public function getRouteKeyName()
    {
        return 'alias';
    }
}
