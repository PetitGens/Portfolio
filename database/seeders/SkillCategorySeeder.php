<?php

namespace Database\Seeders;

use App\Models\SkillCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SkillCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SkillCategory::create([
            'skicat_code' => 'PROG',
            'skicat_label' => 'Langages de programmation',
        ]);
        
        SkillCategory::create([
            'skicat_code' => 'FRAM',
            'skicat_label' => 'Frameworks / librairies',
        ]);

        SkillCategory::create([
            'skicat_code' => 'DB',
            'skicat_label' => 'Bases de données',
        ]);
    }
}
