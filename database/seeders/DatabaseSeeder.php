<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(500000)->create();

        \App\Models\User::factory()->create([
            'name' => 'Alvin Alvrahesta',
            'email' => 'alvin.alvrahesta@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12341234'), // password
            'remember_token' => Str::random(10),
        ]);
    }
}
