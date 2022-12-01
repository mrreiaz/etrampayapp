<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UsersTableSeeder extends Seeder
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
                'firstname' => 'Mr',
                'lastname' => 'Admin',
                'username' => 'admin',
                'userid' => 'EMP101',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('111'),
                'department' => 'HR',
                'jobtype' => 'full-time',
                'gender' => 'Femal',
                'dateofbirth' => '1991-01-25',
                'photo' => '/assets/images/users/avatar-1.jpg',
                'phone' => '07021656683',
                'joindate' => '2020-01-25',
                'address' => 'MY Address',
                'role' => 'admin',
                'status' => 'active',
                'remember_token' => "ijdsfhojifkdhgjkhsfdjghbsdfg",

            ],
            [
                'firstname' => 'Mr',
                'lastname' => 'Emp',
                'username' => 'user',
                'userid' => 'EMP102',
                'email' => 'user@gmail.com',
                'password' => Hash::make('111'),
                'department' => 'IT',
                'jobtype' => 'part-time',
                'gender' => 'Femal',
                'dateofbirth' => '1991-01-25',
                'photo' => '/assets/images/users/avatar-1.jpg',
                'phone' => '07021656683',
                'joindate' => '2022-01-25',
                'address' => 'MY Address',
                'role' => 'user',
                'status' => 'active',
                'remember_token' => "ijdsfhojifkdhgjkhsfdjghbsdfg",
            ],
        ]);
    }
}
