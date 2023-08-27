<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        \App\Models\AdminModel::create([
            'username' => 'moskhar',
            'password' => Hash::make('123'),
        ]);
        \App\Models\AdminModel::create([
            'username' => 'haidarhalwi',
            'password' => Hash::make('123'),
        ]);
    }
}
