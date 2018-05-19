<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function comments()
    {
        return $this->hasMany('Models.Comment');
    }
 
    public function categorie()
    {
        return $this->belongsTo('Models.Category');
    }
 
    public function user()
    {
        return $this->belongsTo('User');
    }
}
