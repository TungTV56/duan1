<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Product extends Model {
    protected $table = 'products';
    protected $columns = [
        'name',
        'price',
        'image',
        'id_category',
        'description',
    ];
}