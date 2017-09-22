<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EXComments extends Model
{
    protected $table = 'ex_comments';

    protected $fillable = ['id', 'comment_title', 'email','comment','post_id','user_id'];
}
