<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        DB::table('posts')->insert([
            'title' => Str::random(10),
            'slug' => Str::of(Str::random(10))->slug('-'),
            'content' => Str::random(100)
        ]);
    }
}
