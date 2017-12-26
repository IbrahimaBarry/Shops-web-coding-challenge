<?php

namespace App;

use Moloquent;

class Shop extends Moloquent
{
    protected $fillable = [
    	"picture", 'name', 'email', 'city', 'location',
    ];
}
