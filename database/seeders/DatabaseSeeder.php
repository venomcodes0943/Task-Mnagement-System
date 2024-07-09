<?php

namespace Database\Seeders;

use App\Models\Checkout;
use App\Models\Comment;
use App\Models\Project;
use App\Models\Schedule;
use App\Models\Task;
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
        User::create([
            'name' => "Haseeb",
            'email' => 'dhcodes0943@gmail.com',
            'password' => 'haseebhaseeb',
            'profileImage' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8YXZhdGFyfGVufDB8fDB8fHww',
        ]);
        Project::factory(5)->create();
        Schedule::factory(10)->create();
        Task::factory(40)->create();
        Comment::factory(35)->create();
        Checkout::factory(60)->create();

    }
}
