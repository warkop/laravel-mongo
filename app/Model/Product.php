<?php

namespace App\Model;

use Jenssegers\Mongodb\Eloquent\Model;

class Product extends Model
{
    protected $connection = 'mongodb';
    protected $collection  = 'products';
    protected $primaryKey  = 'id';
}
