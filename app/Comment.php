<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  protected $fillable =[
    'body','review_id','user_name',
  ];
  protected $dates = [
    'published_at',
  ];
  public function review(){
    return $this->belongsTo('App\Review');
  }
      //
}
