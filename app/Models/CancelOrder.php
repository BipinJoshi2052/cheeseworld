<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CancelOrder extends Model
{
    protected $fillable=['order_id','user_id','note'];

    public function users()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function orders()
    {
        return $this->belongsTo('App\Models\OrdersItem','order_id');
    }
    
}
