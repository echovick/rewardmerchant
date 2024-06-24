<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            // 'uuid' => Str::uuid(),
            'username' => 'admin',
            'name' => 'Rewardmerchant Admin',
            'email' => 'admin@rewardmerchant.com',
            'user_type' => 'super_admin',
            'password' => Hash::make('P@$$w0rd'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
