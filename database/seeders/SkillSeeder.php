<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            // Frontend
            [
                'name' => 'HTML5',
                'category' => 'frontend',
                'proficiency' => 95,
                'icon' => 'bi bi-filetype-html',
                'color' => '#e34c26',
                'sort_order' => 1,
            ],
            [
                'name' => 'CSS3',
                'category' => 'frontend',
                'proficiency' => 90,
                'icon' => 'bi bi-filetype-css',
                'color' => '#1572b6',
                'sort_order' => 2,
            ],
            [
                'name' => 'JavaScript',
                'category' => 'frontend',
                'proficiency' => 88,
                'icon' => 'bi bi-filetype-js',
                'color' => '#f7df1e',
                'sort_order' => 3,
            ],
            [
                'name' => 'Vue.js',
                'category' => 'frontend',
                'proficiency' => 85,
                'icon' => null,
                'color' => '#4fc08d',
                'sort_order' => 4,
            ],
            [
                'name' => 'React',
                'category' => 'frontend',
                'proficiency' => 80,
                'icon' => null,
                'color' => '#61dafb',
                'sort_order' => 5,
            ],
            [
                'name' => 'Bootstrap',
                'category' => 'frontend',
                'proficiency' => 92,
                'icon' => 'bi bi-bootstrap',
                'color' => '#7952b3',
                'sort_order' => 6,
            ],
            [
                'name' => 'TailwindCSS',
                'category' => 'frontend',
                'proficiency' => 87,
                'icon' => null,
                'color' => '#06b6d4',
                'sort_order' => 7,
            ],
            [
                'name' => 'SASS/SCSS',
                'category' => 'frontend',
                'proficiency' => 85,
                'icon' => 'bi bi-filetype-scss',
                'color' => '#cc6699',
                'sort_order' => 8,
            ],

            // Backend
            [
                'name' => 'PHP',
                'category' => 'backend',
                'proficiency' => 92,
                'icon' => 'bi bi-filetype-php',
                'color' => '#777bb4',
                'sort_order' => 1,
            ],
            [
                'name' => 'Laravel',
                'category' => 'backend',
                'proficiency' => 90,
                'icon' => null,
                'color' => '#ff2d20',
                'sort_order' => 2,
            ],
            [
                'name' => 'Node.js',
                'category' => 'backend',
                'proficiency' => 82,
                'icon' => null,
                'color' => '#339933',
                'sort_order' => 3,
            ],
            [
                'name' => 'Express.js',
                'category' => 'backend',
                'proficiency' => 80,
                'icon' => null,
                'color' => '#000000',
                'sort_order' => 4,
            ],
            [
                'name' => 'Python',
                'category' => 'backend',
                'proficiency' => 75,
                'icon' => 'bi bi-filetype-py',
                'color' => '#3776ab',
                'sort_order' => 5,
            ],
            [
                'name' => 'RESTful APIs',
                'category' => 'backend',
                'proficiency' => 88,
                'icon' => 'bi bi-api',
                'color' => '#25d366',
                'sort_order' => 6,
            ],

            // Database
            [
                'name' => 'MySQL',
                'category' => 'database',
                'proficiency' => 88,
                'icon' => null,
                'color' => '#4479a1',
                'sort_order' => 1,
            ],
            [
                'name' => 'PostgreSQL',
                'category' => 'database',
                'proficiency' => 82,
                'icon' => null,
                'color' => '#336791',
                'sort_order' => 2,
            ],
            [
                'name' => 'MongoDB',
                'category' => 'database',
                'proficiency' => 75,
                'icon' => null,
                'color' => '#47a248',
                'sort_order' => 3,
            ],
            [
                'name' => 'Redis',
                'category' => 'database',
                'proficiency' => 78,
                'icon' => null,
                'color' => '#dc382d',
                'sort_order' => 4,
            ],

            // Tools & DevOps
            [
                'name' => 'Git',
                'category' => 'tools',
                'proficiency' => 90,
                'icon' => 'bi bi-git',
                'color' => '#f05032',
                'sort_order' => 1,
            ],
            [
                'name' => 'Docker',
                'category' => 'tools',
                'proficiency' => 80,
                'icon' => null,
                'color' => '#2496ed',
                'sort_order' => 2,
            ],
            [
                'name' => 'AWS',
                'category' => 'tools',
                'proficiency' => 75,
                'icon' => 'bi bi-cloud',
                'color' => '#ff9900',
                'sort_order' => 3,
            ],
            [
                'name' => 'Linux',
                'category' => 'tools',
                'proficiency' => 82,
                'icon' => null,
                'color' => '#fcc624',
                'sort_order' => 4,
            ],
            [
                'name' => 'Nginx',
                'category' => 'tools',
                'proficiency' => 78,
                'icon' => null,
                'color' => '#009639',
                'sort_order' => 5,
            ],
            [
                'name' => 'Webpack',
                'category' => 'tools',
                'proficiency' => 75,
                'icon' => null,
                'color' => '#8dd6f9',
                'sort_order' => 6,
            ],
            [
                'name' => 'Vite',
                'category' => 'tools',
                'proficiency' => 85,
                'icon' => null,
                'color' => '#646cff',
                'sort_order' => 7,
            ],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}