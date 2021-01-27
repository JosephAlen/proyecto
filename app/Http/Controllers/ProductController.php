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
    {   
        // try {

        //     $request->validate([
        //         'id_models' => 'required|numeric',
        //         'name' => 'required|min:2',
        //         'colour' => 'required',
        //         'size' => 'required',
        //         'sale_price' => 'required',

        //     ]);

            $product = new Product();
            $product->name = $request->name;
            $product->code = $request->code;
            $product->colour = $request->colour;
            $product->brand = $request->brand;
            $product->model = $request->model;
            $product->serial = $request->serial;
            $product->description = $request->description;
            $product->state = $request->estado;
            $product->responsable = $request->responsable;

            if($request->hasFile('image'))
            {
                $file = $request->file('image');
                $name = time()."_".$file->getClientOriginalName();
                //Guardar en la Base de datos
                $product->image = $name;
                // Se alamacena en la carpeta field las imagenes de las canchas
                $file->move(public_path().'/storage/img/',$name);
            }

            $product->save();
            return redirect()->route("home")->with('status','Producto creado exitosamente');


        // } catch (ValidationException  $e) {

        //     return Redirect::to("product")->with('error',$e->validator->errors());
        // };

    }
    public function update(Request $request, $id)
    {
            $product = Product::findOrFail($id);
            $product->name = $request->name;
            $product->code = $request->code;
            $product->colour = $request->colour;
            $product->brand = $request->brand;
            $product->model = $request->model;
            $product->serial = $request->serial;
            $product->description = $request->description;
            $product->state = $request->estado;
            $product->responsable = $request->responsable;

            if($request->hasFile('image'))
            {
                $file = $request->file('image');
                $name = time()."_".$file->getClientOriginalName();
                //Guardar en la Base de datos
                $product->image = $name;
                // Se alamacena en la carpeta field las imagenes de las canchas
                $file->move(public_path().'/storage/img/',$name);
            }

            $product->update();
            return redirect()->route("home")->with('status','Producto actualizado exitosamente');

    }

    public function destroy(Request $request)
    {
        $product = Product::findOrFail($request->id);
        if ($product->switch=="1")
        {
            $product->switch = '0';
            $product->save();
            return Redirect::to("home")->with('modificado exitosamente');
        }
        else
        {
            $product->switch = '1';
            $product->save();
            return Redirect::to("home")->with('modificado exitosamente');
        }
    }

    public function stateProduct($id){
        $product = Product::findOrFail($id);
        $product->switch = $product->switch ?0:1;
        $product->update();
        return redirect()->route('home')->with('status','Se actualizo Estado con exito!');
    }
}
