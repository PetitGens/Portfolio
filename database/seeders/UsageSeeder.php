<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class UsageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skillsNautilus = $this->skillsForNautilusProject();
        $nautilusProjectId = Project::getFromName('Nautilus')->pro_id;
        foreach($skillsNautilus as $skill){
            DB::table('por_usage')->insert([
                'pro_id' => $nautilusProjectId,
                'ski_id' => $skill->ski_id,
            ]);
        }
    }

    private function skillsForNautilusProject(): array{
        $names = [
            'PHP',
            'Laravel',
            'MySQL',
            'HTML',
            'JavaScript',
            'CSS',
            'Git',
            'Tailwind CSS',
        ];

        $skills = [];

        foreach($names as $name){
            $skill = Skill::getFromName($name);

            if(!$skill){
                throw new \Exception("Skill $name not found");
            }

            $skills[] = $skill;
        }

        return $skills;
    }
}
