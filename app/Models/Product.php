<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table = 'products';


  static function filter($title)
  {
    return self::where('title', 'like', '%' .$title. '%')->get();
  }
}
