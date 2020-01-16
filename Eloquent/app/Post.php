<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // one to one relationship
    public function category(){
        return $this->belongsTo(Category::class);
    }
     // same post has many tags

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
      // one to one relationship
    public function user(){
        return $this->belongsTo(User::class);
    }

}
