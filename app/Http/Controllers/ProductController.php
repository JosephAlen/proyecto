<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use DB;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        if($request)
        {
            $products=DB::table('products as p')->join('models as m','p.id_models','=','m.id')->select('p.id','p.name','p.code','p.colour','p.size','p.description','p.sale_price','p.stock', 'p.image' ,'p.switch','m.name as models')->get();
            $models=DB::table('models')->select('id as id_models','name as namem','description')->where('switch','=','1')->get();
            return view('product.index',["products"=>$products,"models"=>$models]);

        }
    }
    public function store(Request $request)
    {   try {

            $request->validate([
                'id_models' => 'required|numeric',
                'name' => 'required|min:2',
                'colour' => 'required',
                'size' => 'required',
                'sale_price' => 'required',

            ]);

            $product = new Product();
            $product->name = $request->name;
            $product->code = $request->code;
            $product->colour = $request->colour;
            $product->size = $request->size;
            $product->description = $request->description;
            $product->sale_price = $request->sale_price;
            $product->stock = '0';
            $product->switch = '1';
            $product->id_models = $request->id_models;

            if($request->hasFile('imagen'))
            {
                $filenamewithExt = $request->file('imagen')->getClientOriginalName();
                $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
                $extension = $request->file('imagen')->guessClientExtension();
                $fileNameToStore = time().'.'.$extension;
                $path = $request->file('imagen')->storeAs('public/img',$fileNameToStore);
            }
            else
            {
                $fileNameToStore="noimagen.jpg";
            }

            $product->image=$fileNameToStore;

            $product->save();
            return Redirect::to("product")->with('success','producto creado exitosamente');


        } catch (ValidationException  $e) {

            return Redirect::to("product")->with('error',$e->validator->errors());
        };

    }
    public function update(Request $request)
    {
        try {

            $request->validate([
                'id_models' => 'required',
                'name' => 'required|min:2',
                'colour' => 'required',
                'size' => 'required',
                'sale_price' => 'required',

            ]);

            $product = Product::findOrFail($request->id);
            $product->name = $request->name;
            $product->code = $request->code;
            $product->colour = $request->colour;
            $product->size = $request->size;
            $product->description = $request->description;
            $product->sale_price = $request->sale_price;
            $product->stock = '0';
            $product->switch = '1';
            $product->id_models = $request->id_models;

            if($request->hasFile('imagen'))
            {
                if($product->image != 'noimagen.jpg')
                {
                    Storage::delete('public/img/'.$product->image);
                }
                $filenamewithExt = $request->file('imagen')->getClientOriginalName();
                $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
                $extension = $request->file('imagen')->guessClientExtension();
                $fileNameToStore = time().'.'.$extension;
                $path = $request->file('imagen')->storeAs('public/img',$fileNameToStore);
            }
            else
            {
                $fileNameToStore = $product->image;
            }
            $product->image=$fileNameToStore;

            $product->save();
            return Redirect::to("product")->with('success','producto editado correctamente');
        } catch (ValidationException $e) {
            return Redirect::to("product")->with('error',$e->validator->errors());
        }

    }

    public function destroy(Request $request)
    {
        $product = Product::findOrFail($request->id);
        if ($product->switch=="1")
        {
            $product->switch = '0';
            $product->save();
            return Redirect::to("product")->with('modificado exitosamente');
        }
        else
        {
            $product->switch = '1';
            $product->save();
            return Redirect::to("product")->with('modificado exitosamente');
        }
    }
}
