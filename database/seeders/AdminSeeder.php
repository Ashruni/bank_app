<?php

namespace Database\Seeders;
use App\Models\Users;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;



class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Bank',
            'email' => 'bankadmin@example.com',
            'password' => Hash::make('123'),
        ]);

    }
}
