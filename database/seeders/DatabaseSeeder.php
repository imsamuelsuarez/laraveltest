<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Tag;
use App\Models\Job;
use App\Models\country;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        country::factory(100)->create();
        User::factory(100)->create();
        Job::factory(100)->create();
        Tag::factory(10)->create();
       
    }
}
