<?php
namespace App\Permissions;

use App\Permission;
use App\Role;

trait HasPermissionsTrait {

   	public function roles() {
      return $this->belongsToMany(Role::class,'users_roles');

   	}
   	public function permissions() {
      return $this->belongsToMany(Permission::class,'users_permissions');

   	}
   	public function hasRole( ... $roles ) {
	foreach ($roles as $role) {
		if ($this->roles->contains('slug', $role)) {
		 return true;
		}
	}
	return false;
	}
}