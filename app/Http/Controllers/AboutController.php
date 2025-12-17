<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $education = [
            [
                'degree' => 'Master of Computer Applications (MCA)',
                'institution' => 'SAGE University',
                'year' => '2023 - Present',
                'location' => 'Indore',
                'description' => 'Pursuing advanced studies in software development, application design, databases, and modern web technologies.'
            ],
            [
                'degree' => 'Bachelor of Commerce (B.Com) – Taxation',
                'institution' => 'Arihant College',
                'year' => '2022',
                'location' => 'Indore',
                'description' => 'Completed graduation with specialization in taxation, accounting, and financial management.'
            ],
            [
                'degree' => 'Intermediate (12th)',
                'institution' => 'Sunshine H.S. School',
                'year' => '2019',
                'location' => 'Indore',
                'description' => 'Completed higher secondary education with a focus on commerce and foundational academic subjects.'
            ],
            [
                'degree' => 'Matriculation (10th)',
                'institution' => 'Institution / Place of Education',
                'year' => '2017',
                'location' => 'Khargone',
                'description' => 'Completed secondary education with emphasis on core academic fundamentals.'
            ]
        ];

        $experience = [
            [
                'position' => 'Laravel Developer',
                'company' => 'SMT Labs Pvt. Ltd.',
                'period' => 'July 2023 - Present',
                'description' => 'Developing and maintaining high-performance web applications with a strong focus on scalability, security, and user experience.',
                'achievements' => [
                    'Designed, integrated, and optimized RESTful APIs to support scalable and efficient backend systems',
                    'Developed optimized, maintainable, and robust Laravel code following best practices and industry standards',
                    'Managed Git version control to ensure seamless collaboration and consistent code quality',
                    'Monitored work progress using Hubstaff to ensure effective time management and task tracking',
                    'Consistently met project deadlines, ensuring timely delivery and successful implementation'
                ]
            ],
            [
                'position' => 'Node.js Developer (Intern)',
                'company' => 'CodersId',
                'period' => 'March 2023 - June 2023',
                'description' => 'Worked as a backend intern focusing on REST API development and performance optimization using Node.js.',
                'achievements' => [
                    'Developed and optimized RESTful APIs using Node.js for high performance and scalability',
                    'Performed comprehensive API testing using Postman',
                    'Used Git for version control to support efficient collaboration and timely project delivery',
                    'Resolved technical challenges through strong problem-solving and debugging skills'
                ]
            ]
        ];

        return view('about', compact('education', 'experience'));
    }
}
