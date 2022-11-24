<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    public function articles()
    {
        return $this->belongsToMany(Blog::class, 'article_category', 'category_id', 'article_id');
    }
}
