<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Shop;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shops = Shop::all();

        return view('home', compact('shops'));
    }

    /**
     * Show the user preferred shop's.
     *
     * @return \Illuminate\Http\Response
     */
    public function myPreferredShops() {
        $shops = Auth::user()->shops;

        return view('myPreferredShops', compact('shops'));
    }
}
