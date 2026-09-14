<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Certification;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        Education::create([
            'school' => 'Colegio de Sta. Ana de Victorias',
            'degree' => 'Bachelor of Science in Computer Science',
            'start_year' => 2022,
            'end_year' => 2026,
            'description' => 'Bachelor of Science in Computer Science graduate.',
        ]);

        Skill::create([
            'name' => 'Laravel',
            'category' => 'Web Development',
            'proficiency' => 85,
        ]);

        Skill::create([
            'name' => 'PHP',
            'category' => 'Programming',
            'proficiency' => 85,
        ]);

        Skill::create([
            'name' => 'MySQL',
            'category' => 'Database',
            'proficiency' => 80,
        ]);

        Skill::create([
            'name' => 'HTML/CSS',
            'category' => 'Frontend',
            'proficiency' => 90,
        ]);

        Skill::create([
            'name' => 'JavaScript',
            'category' => 'Frontend',
            'proficiency' => 75,
        ]);

        Skill::create([
            'name' => 'Bootstrap',
            'category' => 'Frontend',
            'proficiency' => 85,
        ]);

        Project::create([
            'title' => 'Boarding Locator',
            'description' =>
                'A proximity-based boarding house finder system designed to help users locate boarding houses and view available rooms.',
            'technologies' =>
                'Laravel, PHP, MySQL, Bootstrap, Leaflet',
            'github_url' => null,
            'live_url' => null,
        ]);

        Project::create([
            'title' => 'Stockroom Inventory System',
            'description' =>
                'A web-based inventory management system for monitoring products, stock in, stock out, requests, returns, and inventory records.',
            'technologies' =>
                'Laravel, PHP, MySQL, Bootstrap, JavaScript',
            'github_url' => null,
            'live_url' => null,
        ]);

        Experience::create([
            'company' => 'Sidmax Technology',
            'position' => 'IT OJT / Trainee',
            'start_date' => '2026-02-09',
            'end_date' => '2026-03-18',
            'description' =>
                'Assisted with inventory encoding, equipment testing, CCTV-related tasks, networking activities, documentation, and technical support.',
        ]);

        Certification::create([
            'title' => 'DICT Seminar',
            'organization' => 'Department of Information and Communications Technology',
            'date' => null,
        ]);
    }
}