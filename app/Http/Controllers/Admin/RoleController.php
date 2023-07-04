<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::whereNotIn('name', ['admin'])->get();
        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid = $request->validate(['name' => ['required', 'min:3']]);
        Role::create($valid);
        return to_route('admin.roles.index')->with('success', 'Role created successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        return view('admin.roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $valid = $request->validate(['name' => ['required', 'min:3']]);
        $role->update($valid);
        return to_route('admin.roles.index')->with('success', 'Role updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        if($role->delete())
            return to_route('admin.roles.index')->with('success', 'Role deleted successfully!');
        return to_route('admin.roles.index')->with('error', 'Something went wrong!');
    }

    public function assignPermissionForm(Role $role)
    {
        $permissions = Permission::all();
        return view('admin.roles.assign-permission', compact('permissions','role'));
    }
    public function assignPermission(Request $request, Role $role)
    {
       $role->syncPermissions($request->selected_permissions);
        return back()->with('success', 'Permission assigned successfully!');
    }
}
