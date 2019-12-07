<?php

namespace App\Models;

use MF\Database\Model;

class User extends Model
{
    protected $table = 'users';

    protected $fillables = ['name', 'email', 'password'];
}
