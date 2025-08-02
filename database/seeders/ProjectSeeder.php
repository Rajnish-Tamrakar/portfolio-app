<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => 'E-Commerce Platform',
                'description' => 'A full-featured e-commerce platform with payment integration, inventory management, and admin dashboard.',
                'long_description' => "This comprehensive e-commerce platform was built to handle high-traffic online stores with advanced features.\n\nKey features include:\n- Multi-vendor support\n- Advanced product filtering and search\n- Secure payment processing with Stripe\n- Real-time inventory management\n- Comprehensive admin dashboard\n- Mobile-responsive design\n- SEO optimization\n\nThe platform was built with scalability in mind, using Laravel for the backend API and Vue.js for the frontend interface. It includes automated testing, CI/CD pipeline, and comprehensive documentation.",
                'image' => null,
                'tech_stack' => ['Laravel', 'Vue.js', 'MySQL', 'Stripe', 'Redis', 'Docker'],
                'github_url' => 'https://github.com/johndoe/ecommerce-platform',
                'demo_url' => 'https://demo-ecommerce.example.com',
                'featured' => true,
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Task Management App',
                'description' => 'A collaborative task management application with real-time updates, team collaboration, and project tracking.',
                'long_description' => "A modern task management solution designed for teams and individuals to organize their work efficiently.\n\nFeatures include:\n- Real-time collaboration\n- Project and task organization\n- Time tracking and reporting\n- Team member management\n- File attachments and comments\n- Mobile app companion\n- Integration with popular tools\n\nBuilt using Laravel for the API backend and React for the frontend, with WebSocket integration for real-time updates.",
                'image' => null,
                'tech_stack' => ['Laravel', 'React', 'PostgreSQL', 'WebSockets', 'AWS'],
                'github_url' => 'https://github.com/johndoe/task-manager',
                'demo_url' => 'https://tasks.example.com',
                'featured' => true,
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Restaurant Booking System',
                'description' => 'Online reservation system for restaurants with table management, customer notifications, and analytics.',
                'long_description' => "A comprehensive restaurant booking system that streamlines the reservation process for both customers and restaurant staff.\n\nCore functionality:\n- Online table reservations\n- Real-time availability checking\n- Customer management system\n- Automated email/SMS notifications\n- Table layout management\n- Booking analytics and reporting\n- Staff dashboard for managing reservations\n\nThe system integrates with popular calendar applications and provides a seamless booking experience across desktop and mobile devices.",
                'image' => null,
                'tech_stack' => ['Laravel', 'Bootstrap', 'MySQL', 'Twilio', 'jQuery'],
                'github_url' => 'https://github.com/johndoe/restaurant-booking',
                'demo_url' => 'https://booking.restaurant-demo.com',
                'featured' => true,
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Blog CMS',
                'description' => 'A content management system for bloggers with markdown support, SEO optimization, and social sharing.',
                'long_description' => "A user-friendly content management system designed specifically for bloggers and content creators.\n\nFeatures:\n- Markdown editor with live preview\n- SEO optimization tools\n- Social media integration\n- Comment system with moderation\n- Tag and category management\n- Analytics dashboard\n- Multi-author support\n- Responsive themes\n\nBuilt with Laravel and includes a clean, intuitive admin interface for managing content, users, and site settings.",
                'image' => null,
                'tech_stack' => ['Laravel', 'TailwindCSS', 'MySQL', 'Markdown', 'Alpine.js'],
                'github_url' => 'https://github.com/johndoe/blog-cms',
                'demo_url' => null,
                'featured' => false,
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'title' => 'Weather Dashboard',
                'description' => 'Real-time weather dashboard with forecasts, alerts, and location-based weather information.',
                'long_description' => "An interactive weather dashboard that provides comprehensive weather information and forecasts.\n\nCapabilities:\n- Current weather conditions\n- 7-day weather forecast\n- Weather alerts and warnings\n- Location-based weather data\n- Historical weather data\n- Weather maps and radar\n- Customizable dashboard widgets\n\nThe application uses multiple weather APIs to provide accurate and up-to-date weather information with a clean, responsive interface.",
                'image' => null,
                'tech_stack' => ['Vue.js', 'Node.js', 'Express', 'Weather API', 'Chart.js'],
                'github_url' => 'https://github.com/johndoe/weather-dashboard',
                'demo_url' => 'https://weather.example.com',
                'featured' => false,
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'title' => 'Portfolio Website',
                'description' => 'A responsive portfolio website showcasing projects, skills, and professional experience.',
                'long_description' => "A modern, responsive portfolio website designed to showcase professional work and skills effectively.\n\nHighlights:\n- Responsive design for all devices\n- Project showcase with detailed case studies\n- Skills and experience sections\n- Contact form with email integration\n- SEO optimized\n- Fast loading performance\n- Clean, professional design\n\nBuilt using Laravel and Bootstrap with a focus on performance, accessibility, and user experience.",
                'image' => null,
                'tech_stack' => ['Laravel', 'Bootstrap', 'MySQL', 'SCSS'],
                'github_url' => 'https://github.com/johndoe/portfolio',
                'demo_url' => 'https://johndoe.dev',
                'featured' => false,
                'sort_order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}