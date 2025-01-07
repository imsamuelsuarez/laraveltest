<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Tag;
use App\Models\Job;
use App\Models\Country;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    
        DB::table('users')->insert([
            'name' => 'admin',
           'email' => 'admin@admin.com',
            'password' => Hash::make('123'), 
        ]);

        Country::factory(100)->create();
        User::factory(10)->create();
        Job::factory(100)->create();
        Tag::factory(10)->create();
       
        $this->call(CarStateSeeder::class);
        $this->call(CarBrandsSeeder::class);
        $this->call(CarModelsSeeder::class);
    }
    
}
