<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $allRoles = Role::all()->keyBy('id');
 
        $permissions = [
            'create-role',
            // 'edit-role' => [Role::where('name', 'admin')],
            // 'delete-role' => [Role::where('name', 'admin')],
            // 'create-user' => [Role::where('name', 'admin')],
            'edit-appointment',
        ];
 
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
          }
    }
}
