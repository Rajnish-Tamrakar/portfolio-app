<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $education = [
            [
                'degree' => 'Bachelor of Computer Science',
                'institution' => 'University of Technology',
                'year' => '2018-2022',
                'description' => 'Focused on software engineering, algorithms, and web development.'
            ],
            [
                'degree' => 'Full Stack Web Development Bootcamp',
                'institution' => 'Tech Academy',
                'year' => '2022',
                'description' => 'Intensive program covering modern web technologies and frameworks.'
            ]
        ];

        $experience = [
            [
                'position' => 'Senior Full Stack Developer',
                'company' => 'Tech Solutions Inc.',
                'period' => '2023 - Present',
                'description' => 'Lead development of web applications using Laravel, Vue.js, and modern DevOps practices.',
                'achievements' => [
                    'Improved application performance by 40%',
                    'Led a team of 5 developers',
                    'Implemented CI/CD pipelines'
                ]
            ],
            [
                'position' => 'Full Stack Developer',
                'company' => 'Digital Agency',
                'period' => '2022 - 2023',
                'description' => 'Developed custom web solutions for clients using PHP, JavaScript, and various frameworks.',
                'achievements' => [
                    'Delivered 15+ client projects',
                    'Reduced development time by 30%',
                    'Mentored junior developers'
                ]
            ]
        ];

        return view('about', compact('education', 'experience'));
    }
}
