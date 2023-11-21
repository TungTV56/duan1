<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class User extends Model {
    protected $table = 'users';
    protected $columns = [

        'username',
        'email',
        'address',
        'password',
        'phone',
        'role',
    ];
}