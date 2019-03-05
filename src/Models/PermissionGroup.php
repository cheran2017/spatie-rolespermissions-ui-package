<?php

namespace Cheran\RolesPermissions\Models;

use Illuminate\Database\Eloquent\Model;

class PermissionGroup extends Model
{
    
    protected $casts = [
    	'permission_ids' => 'array'
    ];
}
