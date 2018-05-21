<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{

    protected $fillable=[ 'title', 'body',];

   public function comments()
   {
       return  $this->hasMany(Comment::class);
   }

   public function category()
   {
       return  $this->belongsTo(Category::class);
   }
}
