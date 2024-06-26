<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->delete();
        Roles::create(['role' => 'admin']);
        Roles::create(['role' => 'manajer']);
        Roles::create(['role' => 'driver']);
    }
}
