<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorymodel extends Model
{
    protected $table = 'categories';
    protected $fillable = ['id','catagory_name'];




    public function comments()
    {
     
        return $this->hasMany('App\galarymodel','category_id','id');
    }
}





