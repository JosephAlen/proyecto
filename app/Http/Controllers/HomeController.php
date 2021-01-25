<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $ventasmes=DB::select('SELECT monthname(v.date_sales) as mes, sum(v.total) as totalmes from sales v where v.state="Registrado" group by monthname(v.date_sales)');
        
        return view('home',["ventasmes"=>$ventasmes]);
    
    }
}
