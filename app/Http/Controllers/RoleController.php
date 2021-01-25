<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use Illuminate\Support\Facades\Redirect;
use DB;

class RoleController extends Controller
{
	public function index(Request $request)
    {
        if($request) 
        {
            $role=DB::table('roles')->get();
            return view('role.index',["role"=>$role]);
        }
    }
    public function store(Request $request)
    {
        $role = new Role();
        $role->name = $request->name;
        $role->switch = '1';
        $role->save();
        return Redirect::to("role");
    }
    public function update(Request $request)
    {
        $role = Role::findOrFail($request->id);
        $role->name = $request->name;
        $role->switch = '1';
        $role->save();
        return Redirect::to("role");
    }
    public function destroy(Request $request)
    {
        $role = Role::findOrFail($request->id);
        if ($role->switch=="1") 
        {
            $role->switch = '0';
            $role->save();
            return Redirect::to("role");
        }
        else
        {
            $role->switch = '1';
            $role->save();
            return Redirect::to("role");
        }
    }
}
