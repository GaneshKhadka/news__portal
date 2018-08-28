<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = ['title', 'slug', 'image', 'writer', 'short_des', 'detail_des', 'publish_date', 'status'];

}
