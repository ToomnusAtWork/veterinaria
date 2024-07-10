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
                'id' => UserRolesEnum::Admin,
                'name' => 'Admin',
                'status' => true,
            ],
            [
                'id' => UserRolesEnum::PropertyOwner,
                'name' => 'Property Owner',
                'status' => true,
            ],
            [
                'id' => UserRolesEnum::Doctor,
                'name' => 'Doctor',
                'status' => true,
            ],
            [
                'id' => UserRolesEnum::Nurse,
                'name' => 'Nurse',
                'status' => true,
            ],
            [
                'id' => UserRolesEnum::Employee,
                'name' => 'Employee',
                'status' => true,
            ],
            [
                'id' => UserRolesEnum::Customer,
                'name' => 'Customer',
                'status' => true,
            ],
        ];
        foreach ($userroles as $role) {
            Role::create($role);
        }
    }
}
