<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        $admin = User::create([
            'username'              => 'Superadmin',
            'email'                 => 'superadmin@nekoproject.com',
            'phone'                 => '0895374874710',
            'password'              => bcrypt('0'),
        ]);
        $admin->assignRole('superadmin');

        $admin = User::create([
            'username'              => 'Administrator',
            'email'                 => 'admin@nekoproject.com',
            'phone'                 => '000000000001',
            'password'              => bcrypt('0'),
        ]);
        $admin->assignRole('admin');

        $admin = User::create([
            'username'              => 'User',
            'email'                 => 'user@nekoproject.com',
            'phone'                 => '000000000002',
            'password'              => bcrypt('0'),
        ]);
        $admin->assignRole('user');
    }
}
