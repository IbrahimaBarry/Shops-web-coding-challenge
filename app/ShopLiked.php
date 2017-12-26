<?php

namespace App;

use Moloquent;

class ShopLiked extends Moloquent
{
    protected $fillable = [
    	'shop_id', 'user_id'
    ];
}
