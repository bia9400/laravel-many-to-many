<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   public $fillable=[
    "name","slug","content","user_id","tags"
   ];

  public function user(){
   return $this->belongsTo("App\User");
  }
  public function tags(){
    return $this->belongsToMany("App\Tag");
}
}
