<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'orderdate', 'user_id', 'total',  'status', 'orderno',
    ];
    public function items()
    {
        return $this->belongsToMany('App\Item','orderdetials')
                    ->withPivot('qty')
                    ->withTimestamps();
    }
    public function user($value='')
    {
        return $this->belongsTo('App\User');
    }
}
