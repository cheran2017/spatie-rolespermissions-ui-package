<?php 
Route::group(['middleware' => ['web','auth']], function () {
	Route::resource('/roles', 'Cheran\RolesPermissions\Controllers\RoleController');
	Route::resource('/permissions', 'Cheran\RolesPermissions\Controllers\PermissionController');
	Route::resource('/permissions-groups', 'Cheran\RolesPermissions\Controllers\PermissionGroupController');
	Route::resource('/users', 'Cheran\RolesPermissions\Controllers\UserController');
	Route::get('/roles-permissions/dashboard','Cheran\RolesPermissions\Controllers\DashboardController@index');
});
