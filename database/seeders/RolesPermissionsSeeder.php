<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create default permissions for each Model in project.
        // @todo: Get all models from app\Models instead of hardcode them.
        $modelNames = [
            'Brand',
            'Country',
            'Coffee',
            'Flavor',
            'User',
        ];

        $permissions = [];
        foreach ($modelNames as $modelName) {
            $permissions[] = Permission::create(['name' => "view-any {$modelName}"]);
            $permissions[] = Permission::create(['name' => "view {$modelName}"]);
            $permissions[] = Permission::create(['name' => "create {$modelName}"]);
            $permissions[] = Permission::create(['name' => "update {$modelName}"]);
            $permissions[] = Permission::create(['name' => "delete {$modelName}"]);
            $permissions[] = Permission::create(['name' => "restore {$modelName}"]);
            $permissions[] = Permission::create(['name' => "force-delete {$modelName}"]);
        }

        // Give Administrator role all permissions.
        $role = Role::findOrCreate('Administrator');
        $role->givePermissionTo($permissions);
    }
}
