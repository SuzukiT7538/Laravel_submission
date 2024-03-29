<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = array('id', 'created_at', 'updated_at');

    public static $rules = array(
        'body' => 'required',
    );

}
