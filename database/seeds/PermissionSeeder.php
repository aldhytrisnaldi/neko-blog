<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            'article-list',
            'article-create',
            'article-update',
            'article-delete',
            'category-list',
            'category-create',
            'category-update',
            'category-delete',
            'doctor-list',
            'doctor-create',
            'doctor-update',
            'doctor-delete',
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
