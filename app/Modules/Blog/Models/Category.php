<?php

namespace App\Modules\Blog\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model 
{

    protected $table = 'blog_categories';
    public $timestamps = false;
    protected $guarded = array('id');

    public function posts()
    {
        return $this->hasMany('Post');
    }

}