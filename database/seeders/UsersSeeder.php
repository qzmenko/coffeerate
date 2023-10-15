<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UsersSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user and assign Administrator role.
        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('adminadmin'),
        ]);

        $role = Role::findOrCreate('Administrator');
        $user->assignRole($role);
    }
}
