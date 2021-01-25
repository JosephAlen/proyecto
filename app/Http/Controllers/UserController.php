<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use DB;

class UserController extends Controller
{
	public function index(Request $request)
    {
        if($request)
        {
            $user=DB::table('users as u')->join('roles as r','u.id_roles','=','r.id')->select('u.id','u.name','u.document','u.nro_document','u.address','u.telephone','u.email','u.user', 'u.image', 'u.password' ,'u.switch','u.id_roles','r.name as name_roles')->get();
            $role=DB::table('roles')->select('id as id_roles','name as namer')->where('switch','=','1')->get();
            return view('user.index',["user"=>$user,"role"=>$role]);
        }
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|min:2',
                'nro_document' => 'required|numeric',
                'telephone' => 'required',
                'email' => 'required|email',
                'address' => 'required',
                'user' => 'required|unique:users',
                'password' => 'required',
                'id_roles' => 'required'

            ]);
            $user= new User();
            $user->name = $request->name;
            $user->document = $request->document;
            $user->nro_document = $request->nro_document;
            $user->telephone = $request->telephone;
            $user->email = $request->email;
            $user->address = $request->address;
            $user->user = $request->user;
            $user->password = bcrypt( $request->password);
            $user->switch = '1';
            $user->id_roles = $request->id_roles;
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
            $user->image=$fileNameToStore;
            $user->save();
            return Redirect::to("user")->with('success','usuario creado correctamente');
        } catch (ValidationException $e) {
            return Redirect::to("user")->with('error',$e->validator->errors());
        }

    }

    public function update(Request $request)
    {

        try {
            $request->validate([
                'name' => 'required|min:2',
                'nro_document' => 'required|number',
                'telephone' => 'required',
                'email' => 'required|email',
                'address' => 'required',
                'user' => 'required|unique:users',
                'password' => 'required',
                'id_roles' => 'required'

            ]);
            $user= User::findOrFail($request->id);
            $user->name = $request->name;
            $user->document = $request->document;
            $user->nro_document = $request->nro_document;
            $user->telephone = $request->telephone;
            $user->email = $request->email;
            $user->address = $request->address;
            $user->user = $request->user;
            $user->password = bcrypt( $request->password);
            $user->switch = '1';
            $user->id_roles = $request->id_roles;

            if($request->hasFile('imagen'))
            {
                if($user->image != 'noimagen.jpg')
                {
                    Storage::delete('public/img/'.$user->image);
                }
                $filenamewithExt = $request->file('imagen')->getClientOriginalName();
                $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
                $extension = $request->file('imagen')->guessClientExtension();
                $fileNameToStore = time().'.'.$extension;
                $path = $request->file('imagen')->storeAs('public/img',$fileNameToStore);
            }
            else
            {
                $fileNameToStore = $user->image;
            }
            $user->image=$fileNameToStore;
            $user->save();
            return Redirect::to("user")->with('success','Usuario creado correctamente');
        } catch (\Throwable $th) {
            return Redirect::to("user")->with('error',$e->validator->errors());
        }

    }


    public function destroy(Request $request)
    {
    	$user= User::findOrFail($request->id);
        if($user->switch=="1")
        {
            $user->switch= '0';
            $user->save();
            return Redirect::to("user");
        }
        else
        {
        	$user->switch= '1';
        	$user->save();
            return Redirect::to("user");
		}
    }
}
