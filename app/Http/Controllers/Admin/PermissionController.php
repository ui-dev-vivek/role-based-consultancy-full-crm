<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        if (!auth()->user()->hasPermission('can_manage_permissions')) {
            abort(403, 'You do not have permission to view permissions.');
        }

        $permissions = Permission::latest()->paginate(15);
        return view('admin.permissions.index', compact('permissions'));
    }

    public function create()
    {
        if (!auth()->user()->hasPermission('can_manage_permissions')) {
            abort(403, 'You do not have permission to create permissions.');
        }

        return view('admin.permissions.create');
    }

    public function store(Request $request)
    {
        if (!auth()->user()->hasPermission('can_manage_permissions')) {
            abort(403, 'You do not have permission to create permissions.');
        }

        $validated = $request->validate([
            'code' => 'required|string|unique:permissions,code|max:255',
            'description' => 'nullable|string|max:500',
        ]);

        Permission::create($validated);

        return redirect()->route('admin.permissions.index')->with('success', 'Permission created successfully!');
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
