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
        \App\Models\Admin\Author::factory(10)->create();
        \App\Models\Admin\Article::factory(40)->create();
        \App\Models\Admin\Commentator::factory(5)->create();
        \App\Models\Admin\Comment::factory(150)->create();




        // \App\Models\User::factory()->create([
        //     'name' => 'Super Admin',
        //     'email' => 'admin@admin.com',
        //     'password'=>Hash::make('password')
        // ]);
    }
}
