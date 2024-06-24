<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
