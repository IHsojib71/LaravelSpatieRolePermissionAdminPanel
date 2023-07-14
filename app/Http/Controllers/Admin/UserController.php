<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

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
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return to_route('admin.users.index')->with('success', 'New User Created!');
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
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $valid = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user)],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
        ]);
        if ($valid['password'] != null) {
            if ($user->update($valid))
                return to_route('admin.users.index')->with('success', 'User Updated!');
        } else {
            if ($user->update(Arr::except($valid, ['password'])))
                return to_route('admin.users.index')->with('success', 'User Updated!');
        }

        return back()->with('error', 'Something went wrong!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if ($user->delete())
            return back()->with('success', 'Successfully Deleted!');
        return back()->with('error', 'Something went wrong!');
    }
    public function assignRoleForm(User $user)
    {
        $roles = Role::all();
        return view('admin.users.assign-roles', compact('user', 'roles'));
    }

    public function assignRole(Request $request, User $user)
    {
        $user->syncRoles($request->selected_roles);
        return back()->with('success', 'Roles assigned successfully!');
    }
    public function assignPermissionForm(User $user)
    {
        $permissions = Permission::all();
        return view('admin.users.assign-permissions', compact('user', 'permissions'));
    }

    public function assignPermission(Request $request, User $user)
    {
        $user->syncPermissions($request->selected_permissions);
        return back()->with('success', 'Permissions assigned successfully!');
    }
}
