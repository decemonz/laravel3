<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Review extends Model
{
    //
    protected $fillable = [
      'title','body','published_at','image','artist','rate',
    ];
    protected $dates = [
      'published_at',
    ];
    protected $casts = [
      'rate' => 'integer'
    ];
    public function scopePublished($query){
      $query->where('published_at','<=',Carbon::now());
    }
    public function user(){
      return $this->belongsTo('App\User');
    }
    public function tags(){
      return $this->belongsToMany('App\Tag')->withTimestamps();
    }
    public function comments(){
      return $this->hasMany('App\Comment');
    }
}
