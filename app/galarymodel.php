<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galarymodel extends Model
{
    protected $table = 'posts';
    protected $fillable = ['id','category_id','title','descrepeipn','image'];
}


