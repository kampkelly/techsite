<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post_preview extends Model
{
    //
	protected $fillable = ['title', 'body', 'body_text', 'category', 'category_id', 'author_name', 'image', 'status', 'tags'];
}
