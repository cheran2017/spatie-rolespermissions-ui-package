<?php

namespace Cheran\RolesPermissions\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cheran\RolesPermissions\Models\PermissionGroup;
use Cheran\RolesPermissions\Models\Permission;
use Cheran\RolesPermissions\Models\Role;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'permissions'       => Permission::count(),
            'permission_groups' => PermissionGroup::count(),
            'roles'             => Role::count(),
        ];
        return view('rolespermissions::admin.views.dashboard.dashboard')->with('data',$data);
    }
}
