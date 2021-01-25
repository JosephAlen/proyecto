<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use DB;

class ConsultaController extends Controller
{
	public function index(Request $request)
    {
        if($request) 
        {
            $products=DB::table('products as p')->join('models as m','p.id_models','=','m.id')->select('p.id','p.name','p.code','p.colour','p.size','p.description','p.sale_price','p.stock', 'p.image' ,'p.switch','m.name as models')->get();
            $models=DB::table('models')->select('id as id_models','name as namem','description')->where('switch','=','1')->get();
            return view('consulta.index',["products"=>$products,"models"=>$models]);
            
        }
    }
}
