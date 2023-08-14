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


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('website.index');
    }
    public function sections()
    {
        return view('sections');
    }
}
