<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Tag extends Model
{
    //
    protected $dates = [
      'published_at',
    ];
    protected $fillable = [ 'name' ];

    public function reviews(){
      return $this->belongsToMany('App\Review')->withTimestamps();
    }
}
