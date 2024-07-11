<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enums\UserRolesEnum;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userroles = [
            [
                'id' => UserRolesEnum::Admin->value,
                'name' => UserRolesEnum::Admin->name,
                'status' => true,
            ],
            [
                'id' => UserRolesEnum::PropertyOwner->value,
                'name' => UserRolesEnum::PropertyOwner->name,
                'status' => true,
            ],
            [
                'id' => UserRolesEnum::Doctor->value,
                'name' => UserRolesEnum::Doctor->name,
                'status' => true,
            ],
            [
                'id' => UserRolesEnum::Nurse->value,
                'name' => UserRolesEnum::Nurse->name,
                'status' => true,
            ],
            [
                'id' => UserRolesEnum::Employee->value,
                'name' => UserRolesEnum::Employee->name,
                'status' => true,
            ],
            [
                'id' => UserRolesEnum::Customer->value,
                'name' => UserRolesEnum::Customer->name,
                'status' => true,
            ],
        ];
        foreach ($userroles as $role) {
            Role::create($role);
        }
    }
}
