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
            'category-edit',
            'category-delete'
         ];

         foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
