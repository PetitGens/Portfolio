<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\SkillCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'pro_name' => 'Nautilus',
            'pro_description' => $this->nautilusProjectDescription(),
            'pro_github' => 'https://github.com/PetitGens/nautilus',
            'pro_summary' => 'Site web pour un club de plongée fait avec Laravel (framework PHP)',
        ]);
    }

    private function nautilusProjectDescription(): string{
        return file_get_contents('resources/text/projects/nautilus.md');
    }
}
