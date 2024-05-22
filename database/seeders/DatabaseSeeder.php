<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Enums\UserRolesEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // run location seeder
        $this->call([
            LocationSeeder::class,
        ]);

        $userroles = [
            [
                'id' => UserRolesEnum::Customer,
                'name' => 'Customer',
                'status' => true,
            ],
            [
                'id' => UserRolesEnum::Employee,
                'name' => 'Employee',
                'status' => true,
            ],
            [
                'id' => UserRolesEnum::Admin,
                'name' => 'Admin',
                'status' => true,
            ],
            [
                'id' => UserRolesEnum::Doctor,
                'name' => 'Doctor',
                'status' => true,
            ]

        ];

        foreach ($userroles as $role) {
            \App\Models\Role::create($role);
        }

        // Create admin user
        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@petpal.com',
            'password' => Hash::make('adminpassword'),
            'phone_number' => '1234569990',
            'role_id' => UserRolesEnum::Admin,
        ]);

        // create mock customers
        \App\Models\User::create([
            'name' => 'John Delta',
            'email' => 'cust1@gmail.com',
            'password' => Hash::make('custpassword'),
            'phone_number' => '1299567890',
            'role_id' => UserRolesEnum::Customer,
        ]);

        \App\Models\User::create([
            'name' => 'Namura Aki',
            'email' => 'cust2@gmail.com',
            'password' => Hash::make('custpassword'),
            'phone_number' => '1277567890',
            'role_id' => UserRolesEnum::Customer,
        ]);

        \App\Models\User::create([
            'name' => 'Customer 3',
            'email' => 'cust3@gmail.com',
            'password' => Hash::make('custpassword'),
            'phone_number' => '1234998890',
            'role_id' => UserRolesEnum::Customer,
        ]);

        // this customer is suspeneded
        \App\Models\User::create([
            'name' => 'Customer 4',
            'email' => 'cust4@gmail.com',
            'password' => Hash::make('custpassword'),
            'phone_number' => '2224262890',
            'role_id' => UserRolesEnum::Customer,
            'status' => '0',
        ]);


        // create mock employees
        \App\Models\User::create([
            'name' => 'Narikun Ketprapakorn',
            'email' => 'nurse1@petpal.com',
            'password' => Hash::make('emppassword'),
            'phone_number' => '1644567890',
            'role_id' => UserRolesEnum::Employee,
        ]);

        \App\Models\User::create([
            'name' => 'Employee 2',
            'email' => 'emp2@petpal.com',
            'password' => Hash::make('emppassword'),
            'phone_number' => '1234523890',
            'role_id' => UserRolesEnum::Employee,
        ]);

        // this Employee is suspeneded
        \App\Models\User::create([
            'name' => 'Employee 3',
            'email' => 'emp3@gmail.com',
            'password' => Hash::make('emppassword'),
            'phone_number' => '0034567890',
            'role_id' => UserRolesEnum::Employee,
            'status' => '0',
        ]);

        // Deals
        \App\Models\Deal::create([
            'name' => 'Deal 1',
            'description' => 'Deal 1 description',
            'start_date' => '2023-07-16',
            'end_date' => '2023-07-20',
            'discount' => '10',
            'is_hidden' => '0',
        ]);

        // categories Skin, Makeup, Nails, Hair
        \App\Models\Category::create([
            'name' => 'Checkup',
        ]);

        \App\Models\Category::create([
            'name' => 'Surgery',
        ]);

        \App\Models\Category::create([
            'name' => 'Pet daycare',
        ]);

        \App\Models\Category::create([
            'name' => 'Vaccines',
        ]);

        $this->call([
            ServicesSeeder::class,
            TimeSlotSeeder::class,
        ]);


    }
}
