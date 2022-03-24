<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;


class RoleController extends Controller
{
    public function index()
    {
    // ---------------------------------------------------------------
    // This function shows a way to perform route protection. UserController is another way
    //-----------------------------------------------------------------
        abort_if(Gate::denies('roles.index'), 403);  // proteccion de ruta en UserController otra  manera de hacerlo

        $roles = Role::all();

        return view('roles.index',compact('roles'));

        //
    }

    public function create()
    {
        abort_if(Gate::denies('roles.create'), 403);  // proteccion de ruta en UserController otra  manera de hacerlo

        $permissions = Permission::all();
        return view('roles.create',compact('permissions'));
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:permissions'
        ]);

        DB::beginTransaction();

        $role = Role::create($request->only('name'));

        // $role->permissions()->sync($request->input('permissions', []));

        $role->syncPermissions($request->input('permissions', []));
        // $role->syncPermissions($request->permissions);

        DB::commit();

        return redirect()->route('roles.index');

        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $permissions = Permission::all();
        $role = Role::find($id);
        $role->load('permissions');
        return view('roles.edit',compact('permissions','role'));
        //
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => "required|unique:roles,name,$id"
        ]);

        DB::beginTransaction();
        $role = Role::find($id);
        $role->update($request->only('name'));
        $role->permissions()->sync($request->input('permissions', []));
        DB::commit();

        return redirect()->route('roles.index');

        //
    }

    public function destroy($id)
    {
        return "destruyendo";
        //
    }
}
