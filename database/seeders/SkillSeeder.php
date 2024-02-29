<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skill::create([
            'ski_name' => 'PHP',
            'skicat_code' => 'PROG',

            'ski_description' => file_get_contents('resources/text/skills/php.md'),
        ]);

        Skill::create([
            'ski_name' => 'HTML',
            'skicat_code' => 'PROG',

            'ski_description' => file_get_contents('resources/text/skills/html.md')
        ]);

        Skill::create([
            'ski_name' => 'CSS',
            'skicat_code' => 'PROG',

            'ski_description' => file_get_contents('resources/text/skills/css.md')
        ]);

        Skill::create([
            'ski_name' => 'JavaScript',
            'skicat_code' => 'PROG',

            'ski_description' => file_get_contents('resources/text/skills/javascript.md')
        ]);

        Skill::create([
            'ski_name' => 'Laravel',
            'skicat_code' => 'FRAM',

            'ski_description' => file_get_contents('resources/text/skills/laravel.md')
        ]);

        Skill::create([
            'ski_name' => 'Tailwind CSS',
            'skicat_code' => 'FRAM',

            'ski_description' => file_get_contents('resources/text/skills/tailwindcss.md')
        ]);

        Skill::create([
            'ski_name' => 'MySQL',
            'skicat_code' => 'DB',

            'ski_description' => file_get_contents('resources/text/skills/mysql.md')
        ]);

        Skill::create([
            'ski_name' => 'Git',
            
            'ski_description' => file_get_contents('resources/text/skills/git.md')
        ]);
    }
}
