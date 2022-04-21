<?php

namespace Database\Seeders;

use App\Models\admin_account;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        admin_account::create([
            'username' => 'admin',
            'password' => Hash::make('admin')
        ]);

        admin_account::create([
            'username' => 'admin2',
            'password' => Hash::make('admin2')
        ]);
    }
}
