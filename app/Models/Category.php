<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    public function postes()
    {
        return $this->hasMany('Models/Article');
    }
}
