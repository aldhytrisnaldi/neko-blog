<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            'category-list',
            'category-create',
            'category-update',
            'category-delete',
            'promotion-list',
            'promotion-create',
            'promotion-update',
            'promotion-delete',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
