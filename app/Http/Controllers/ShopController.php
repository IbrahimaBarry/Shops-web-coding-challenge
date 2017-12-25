<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;

class ShopController extends Controller
{
    public function __construct() {
    	$this->middleware('auth');
    }

    public function index() {
    	$shops = Shop::all();

    	return view('home', compact('shops'));
    }
}
