<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopLiked extends Model
{
    protected $fillable = [
    	'shop_id', 'user_id'
    ];
}
