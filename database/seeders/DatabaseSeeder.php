<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        \App\Models\Post::factory(10)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\User::factory(10)->create();
    }
}
