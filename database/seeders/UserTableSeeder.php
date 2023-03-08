<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;



class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin7',
                'email' => 'admin7@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('1234qwer'),
                'remember_token' => Str::random(10),
                'recommendation' => 'admin1',
                'credit' => 2000,
                'created_at' => now(),
                'updated_at' => now(),
                'recommendation' => 'Lorem ipsum dolor sit amet',
                'nation' => 'Taiwan',
                'id_number' => '0987654321',
                'area_code' => '456',
                'address' => '456 Elm St, Anytown Taiwan',
                'gender' => 'Female',
                'birthdate' => '1995-03-15',
                'cellphone' => '456-789-1234',
                'housephone' => '456-789-1234',
                'emergency_name' => 'John Smith',
                'emergency_phone' => '456-789-1234',
                'emergency_relationship' => 'Brother'
            ],
            [
                'name' => 'admin8',
                'email' => 'admin8@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('1234qwer'),
                'remember_token' => Str::random(10),
                'recommendation' => 'admin1',
                'credit' => 2000,
                'created_at' => now(),
                'updated_at' => now(),
                'recommendation' => 'Lorem ipsum dolor sit amet',
                'nation' => 'Taiwan',
                'id_number' => '0987654321',
                'area_code' => '456',
                'address' => '456 Elm St, Anytown Taiwan',
                'gender' => 'Female',
                'birthdate' => '1995-03-15',
                'cellphone' => '456-789-1234',
                'housephone' => '456-789-1234',
                'emergency_name' => 'John Smith',
                'emergency_phone' => '456-789-1234',
                'emergency_relationship' => 'Brother'
            ],
            [
                'name' => 'admin9',
                'email' => 'admin9@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('1234qwer'),
                'remember_token' => Str::random(10),
                'recommendation' => 'admin1',
                'credit' => 2000,
                'created_at' => now(),
                'updated_at' => now(),
                'recommendation' => 'Lorem ipsum dolor sit amet',
                'nation' => 'Taiwan',
                'id_number' => '0987654321',
                'area_code' => '456',
                'address' => '456 Elm St, Anytown Taiwan',
                'gender' => 'Female',
                'birthdate' => '1995-03-15',
                'cellphone' => '456-789-1234',
                'housephone' => '456-789-1234',
                'emergency_name' => 'John Smith',
                'emergency_phone' => '456-789-1234',
                'emergency_relationship' => 'Brother'
            ],
            [
                'name' => 'admin3',
                'email' => 'admin3@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('1234qwer'),
                'remember_token' => Str::random(10),
                'recommendation' => 'admin1',
                'credit' => 2000,
                'created_at' => now(),
                'updated_at' => now(),
                'recommendation' => 'Lorem ipsum dolor sit amet',
                'nation' => 'Taiwan',
                'id_number' => '0987654321',
                'area_code' => '456',
                'address' => '456 Elm St, Anytown Taiwan',
                'gender' => 'Female',
                'birthdate' => '1995-03-15',
                'cellphone' => '456-789-1234',
                'housephone' => '456-789-1234',
                'emergency_name' => 'John Smith',
                'emergency_phone' => '456-789-1234',
                'emergency_relationship' => 'Brother'
            ],
            // Add more users as needed
        ]);
    }
}
