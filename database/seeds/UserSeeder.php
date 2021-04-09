<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        $admin = User::create([
            'username'              => 'Aldhy Trisnaldi',
            'email'                 => 'aldhy.terror@gmail.com',
            'phone'                 => '0895374874710',
            'password'              => bcrypt('666777'),
        ]);
        $admin->assignRole('superadmin');

        $admin = User::create([
            'username'              => 'admin',
            'email'                 => 'admin@rsnuraida.com',
            'phone'                 => '000000000000',
            'password'              => bcrypt('666777'),
        ]);
        $admin->assignRole('admin');
    }
}
