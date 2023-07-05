<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::all();
        return view('admin.permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid = $request->validate(['name' => ['required', 'min:3']]);
        Permission::create($valid);
        return to_route('admin.permissions.index')->with('success', 'Permission Created!');
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
    public function edit(string $id)
    {
        $permission= Permission::findOrFail($id);
        return view('admin.permissions.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $valid = $request->validate(['name' => ['required', 'min:3']]);
        $permission = Permission::findOrFail($id);
        $permission->update($valid);
        return to_route('admin.permissions.index')->with('success', 'Permission updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $permission = Permission::findOrFail($id);
        if($permission->delete())
            return to_route('admin.permissions.index')->with('success', 'Permission deleted successfully!');
        return to_route('admin.permissions.index')->with('error', 'Something went wrong   !');
    }

    public function assignRoleForm (Permission $permission)
    {
        $roles = Role::all();
        return view('admin.permissions.assign-roles', compact('permission','roles'));
    }

    public function assignRole(Request $request, Permission $permission)
    {
        $permission->syncRoles($request->selected_roles);
        return back()->with('success', 'Roles assigned successfully!');
    }
}
