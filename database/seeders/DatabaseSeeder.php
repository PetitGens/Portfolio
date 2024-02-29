<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        $this->call([
            SkillCategorySeeder::class,
            SkillSeeder::class,
            ProjectSeeder::class,
            UsageSeeder::class,
        ]);
    }
}
