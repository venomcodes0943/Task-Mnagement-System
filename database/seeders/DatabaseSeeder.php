<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // User::create([
        //     'name' => "Haseeb",
        //     'email' => 'dhcodes0943@gmail.com',
        //     'password' => 'haseebhaseeb'
        // ]);
        Project::factory(5)->create();
    }
}
