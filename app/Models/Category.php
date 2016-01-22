<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Category extends Eloquent
{
    protected $table = 'categories';
    public $incrementing = true;
    protected $guarded = ['id'];
}