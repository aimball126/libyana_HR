<?php

namespace App\Http\Controllers;

use App\Models\ViewUserData;
use App\purchases;
use App\Returns;
use App\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$sum = ViewUserData::sum('items_price');
        $returns_sum =0;
        $purchases_sum = purchases::sum('price');
        return view('HomePage.home',compact('returns_sum','purchases_sum'));
    }
    public function sections()
    {
        return view('sections');
    }
}
