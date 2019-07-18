<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{





  protected $fillable = [
      'title', 'prix', 'category_id', 'image','scategory','photo','galery'
  ];





  public function category()
  {
      return $this->belongsTo('App\Category');
  }


  public function user()
  {
      return $this->belongsTo('App\User');
  }

}
