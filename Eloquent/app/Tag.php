<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
     // same tag has many posts
    public function post(){
        return $this->belongsToMany(Post::class);
    }

    
}
