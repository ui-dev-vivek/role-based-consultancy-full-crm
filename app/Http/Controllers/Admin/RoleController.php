<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        if (!auth()->user()->hasPermission('can_manage_permissions')) {
            abort(403, 'You do not have permission to view roles.');
        }

        $roles = Role::with('permissions')->latest()->paginate(15);
        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        if (!auth()->user()->hasPermission('can_manage_permissions')) {
            abort(403, 'You do not have permission to create roles.');
        }

        $permissions = Permission::all();
        return view('admin.roles.create', compact('permissions'));
    }

    public function store(Request $request)
    {
        if (!auth()->user()->hasPermission('can_manage_permissions')) {
            abort(403, 'You do not have permission to create roles.');
        }

        $validated = $request->validate([
            'role_name' => 'required|string|max:255',
            'role_type' => 'required|in:core,sales,partner',
            'permissions' => 'array',
        ]);

        $role = Role::create([
            'role_name' => $validated['role_name'],
            'role_type' => $validated['role_type'],
        ]);

        if (isset($validated['permissions'])) {
            $role->permissions()->attach($validated['permissions']);
        }

        return redirect()->route('admin.roles.index')->with('success', 'Role created successfully!');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
