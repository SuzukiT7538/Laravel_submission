<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagArticle extends Model
{
    use HasFactory;

    protected $table = 'tag_article';
    protected $fillable = ['article_id', 'tag_id'];

    public function tags()
    {
        return $this->hasOne('App\Models\Tag','id','tag_id');
    }

    public function articles()
    {
        return $this->hasOne('App\Models\Article');
    }
}
