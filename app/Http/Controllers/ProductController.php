<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use Barryvdh\DomPDF\Facade;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
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

    /**
     * Se almacena todos los datos del nuevo producto
     */
    public function store(Request $request)
    {   
        $product                = new Product();
        $product->name          = $request->name;
        $product->code          = $request->code;
        $product->colour        = $request->colour;
        $product->brand         = $request->brand;
        $product->model         = $request->model;
        $product->serial        = $request->serial;
        $product->description   = $request->description;
        $product->state         = $request->estado;
        $product->responsable   = $request->responsable;

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

        // Se genera QR en imagen y se almacena el nombre en la base de datos
        $qr = QrCode::size(500)
                    ->format('png')
                    ->generate("http://127.0.0.1:8000/producto-qr/$product->id",
                            public_path('img/model/qr-'.$product->name.$product->id.'.png')
                    );

        $p          = Product::findOrFail($product->id);
        $p->qr_code = $qr;
        $p->update();

        return redirect()->route("home")->with('status','Producto creado exitosamente');
    }

    /**
     * Se actualiza los datos generales del registro producto
     */
    public function update(Request $request, $id)
    {
            $product                = Product::findOrFail($id);
            $product->name          = $request->name;
            $product->code          = $request->code;
            $product->colour        = $request->colour;
            $product->brand         = $request->brand;
            $product->model         = $request->model;
            $product->serial        = $request->serial;
            $product->description   = $request->description;
            $product->state         = $request->estado;
            $product->responsable   = $request->responsable;

            if($request->hasFile('image'))
            {
                $file = $request->file('image');
                $name = time()."_".$file->getClientOriginalName();
                //Guardar en la Base de datos
                $product->image = $name;
                // Se alamacena en la carpeta field las imagenes de las canchas
                $file->move(public_path().'/storage/img/',$name);
            }

            // Se genera QR en imagen y se almacena el nombre en la base de datos
            $qr = QrCode::size(500)
                        ->format('png')
                        ->generate("http://127.0.0.1:8000/producto-qr/$product->id",
                                public_path('img/model/qr-'.$product->name.$product->id.'.png')
                        );

            $product->qr_code = $qr;

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

    /**
     * Cambio de estado de producto (switch)
     */
    public function stateProduct($id){
        $product            = Product::findOrFail($id);
        $product->switch    = $product->switch ?0:1;
        $product->update();
        return redirect()->route('home')->with('status','Se actualizo Estado con exito!');
    }

    /**
     * Imprime QR y el nombre
     */
    public function print($id){
        $product    = Product::where('id',$id)->get();
        $pdf        = \PDF::loadView('product.pdf',[
                            'product' => $product
                        ])->setPaper('A5');

        return $pdf->stream();
    }

    /**
     * Mostrar y buscar por Qr el producto
     */
    public function showQr($id)
    {
        $product = Product::findOrFail($id);
        return $product;
    }

    /**
     * Vista de Consulta de Productos
     */
    public function queryProduct(){
        return view('product.index');
    }
}
