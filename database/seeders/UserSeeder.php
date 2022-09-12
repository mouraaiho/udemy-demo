<?php

namespace Database\Seeders;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::find(1);
        User::create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('admin'),
            'email_verified_at' => now(),
            'role_id' => $role->id,
        ]);
        $role = Role::find(2);
        User::create([
            'name' => 'teacher',
            'email' => 'teacher@mail.com',
            'password' => Hash::make('teacher'),
            'email_verified_at' => now(),
            'role_id' => $role->id,
        ]);
        $role = Role::find(3);
        User::create([
            'name' => 'student',
            'email' => 'student@mail.com',
            'password' => Hash::make('student'),
            'email_verified_at' => now(),
            'role_id' => $role->id,
        ]);
    }
}
