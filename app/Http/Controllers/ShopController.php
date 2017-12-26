<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use Auth;

class ShopController extends Controller
{
    public function __construct() {
    	$this->middleware('auth');
    }

    public function like($id) {
    	$shop = Shop::find(strval($id));
        Auth::user()->shops()->save($shop);
    }

    public function removeLike($id) {
    	$shop = Shop::find(strval($id));
    	Auth::user()->shops()->detach($shop);
    }

    public function dislike($id) {
        session()->push(strval(Auth::user()->id), $id);
    }
}
