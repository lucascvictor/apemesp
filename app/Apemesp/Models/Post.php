<?php

namespace App\Apemesp\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Post extends Model
{
    protected $table = 'posts';
    public $fillable = ['titulo', 'previa'];
}
