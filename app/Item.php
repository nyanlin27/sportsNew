<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name', 'photo', 'price', 'description'
    ];
    public function orders()
    {
        return $this->belongsTo('App\Order', 'orderdetails')
            ->withPivote('qty')
            ->withTimestamps();
    }
}
