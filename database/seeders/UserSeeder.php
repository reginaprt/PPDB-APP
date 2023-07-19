<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'              => 'Admin',
                'email'             => 'admin@mail.com',
                'password'          => bcrypt('12345'),
                'roles_id'          => 1,
            ],
            [
                'name'              => 'User',
                'email'             => 'user@mail.com',
                'password'          => bcrypt('12345'),
                'roles_id'          => 2,
            ],
        ];

        foreach ($user as $key => $value){
            User::create($value);
        }
    }
}
