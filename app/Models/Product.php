<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table = 'products';


  static function filter($title)
  {
    $extra = self::where('title', 'like', '%' . $title . '%')->get();
  }

  public function extra()
  {
    return $this->hasMany(ProductExtra::class);
  }
}
