<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   public $fillable=[
    "name","slug","content","user_id"
   ];

  public function user(){
   return $this->belongsTo("App\User");
  }
}
