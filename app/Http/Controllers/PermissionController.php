<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;


class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();

        return view('permissions.index',compact('permissions'));
        //
    }

    public function create()
    {
        return view('permissions.create');

        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:permissions'
        ]);

        $permission =Permission::create($request->all());

        return redirect()->route('permissions.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    //
}
