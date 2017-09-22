<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EXPosts extends Model
{
    protected $table = 'ex_posts';

    protected $fillable = ['id', 'user_id', 'title', 'text','mime_type','path','width','size','height'];
}
