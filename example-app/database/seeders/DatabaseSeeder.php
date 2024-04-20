<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
        // \App\Models\User::factory(10)->create();

    public function run()
    {

            User::create([
                'name' => 'Admin',
                'email' => 'admin@admin.admin',
                'password' => Hash::make('adminadminadmin'),
            ]);

    }

}
