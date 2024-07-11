<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Role;
use App\Enums\UserRolesEnum;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allRoles = Role::all()->keyBy('id');
 
        $permissions = [
            'create-role' => [UserRolesEnum::Admin->value],
            'edit-role' => [UserRolesEnum::Admin->value],
            'delete-role' => [UserRolesEnum::Admin->value],
            // 'create-user' => [Role::where('name', 'admin')],
            'edit-appointment' => [UserRolesEnum::Customer->value],
        ];
 
        foreach ($permissions as $key => $roles) {
            $permission = Permission::create(['name' => $key]);
            foreach ($roles as $role) {
                $allRoles[$role]->permissions()->attach($permission->id);
            }
        }
    }
}
