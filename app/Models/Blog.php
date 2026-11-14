<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['image', 'published_date', 'category', 'title', 'link'];
}
