<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $guarded = array('id', 'updated_at', 'created_at');

    public static $rules = array(
        'title' => 'required',
    );


    public function comment()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function tagArticle()
    {
        return $this->belongsToMany(Tag::class, 'tag_article');
    }
}
