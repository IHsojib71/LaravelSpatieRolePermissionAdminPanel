<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if($user->delete())
            return back()->with('success', 'Successfully Deleted!');
        return back()->with('error', 'Something went wrong!');

    }
    public function assignRoleForm (User $user)
    {
        $roles = Role::all();
        return view('admin.users.assign-roles', compact('user','roles'));
    }

    public function assignRole(Request $request, User $user)
    {
        $user->syncRoles($request->selected_roles);
        return back()->with('success', 'Roles assigned successfully!');
    }
}
