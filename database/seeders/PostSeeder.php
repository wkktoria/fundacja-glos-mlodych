<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::truncate();

        $this->call([ProjectSeeder::class]);
        $this->call([FeedSeeder::class]);
        $this->call([ReportSeeder::class]);
    }
}
