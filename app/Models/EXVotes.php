<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EXVotes extends Model
{
    protected $table = 'ex_votes';

    protected $fillable = ['id', 'post_id', 'like', 'dislike', 'user_id'];
}
