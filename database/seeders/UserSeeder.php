<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('users')->delete();
        User::create(['username' => 'admin', 'password' => 'admin123', 'email' => 'admin@gmail.com', 'nrp' => '019289', 'role_id' => 1]);
        User::create(['username' => 'manajer', 'password' => 'manajer123', 'email' => 'manajer@gmail.com', 'nrp' => '018372', 'role_id' => 2]);
        User::create(['username' => 'driver', 'password' => 'driver123', 'email' => 'driver@gmail.com', 'nrp' => '281920', 'role_id' => 3]);
    }
}
