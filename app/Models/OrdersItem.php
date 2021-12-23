<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrdersItem extends Model
{
  protected $table = 'orders_items';

  public function orders()
  {
    return $this->hasMany('App\Models\CancelOrder','id','order_id');
  }
}
