<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ApplicationConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = config('teamgeist.permissions');
        $superadmin = config('teamgeist.superadmin');
        $user = config('teamgeist.user');

        $user = User::create([
            'name' => $user['name'],
            'email' => $user['email'],
            'password' => Hash::make($user['password']),
        ]);

        $user2 = User::create([
            'name' => 'test user',
            'email' => 'test@email.com',
            'password' => Hash::make('password'),
        ]);

        $superadmin = Role::create(['name' => $superadmin]);

        foreach($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        $user->assignRole($superadmin);
        $user2->assignRole($superadmin);
    }
}
