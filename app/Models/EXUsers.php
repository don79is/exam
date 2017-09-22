<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class EXUsers extends Authenticatable
{
    use Notifiable;
    public $incrementing = false;
    use SoftDeletes;

    protected $table = 'ex_users';

    protected $fillable = ['id', 'first_name', 'last_name', 'email', 'password'];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
