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

    public function index() {
    	$shops = Shop::all();

    	return view('home', compact('shops'));
    }

    public function like($id) {
    	$shop = Shop::find(strval($id));
        Auth::user()->shops()->save($shop);
    }
}
