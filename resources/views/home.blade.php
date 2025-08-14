@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Hero Section -->
<section class="hero-section position-relative text-white" style="min-height: 100vh; display: flex; align-items: center;">
    <!-- Background GIF -->
    <div class="position-absolute top-0 start-0 w-100 h-100" 
         style="background: url('https://media.giphy.com/media/qgQUggAC3Pfv687qPC/giphy.gif') center/cover no-repeat; z-index: 1;">
    </div>
    
    <!-- Overlay for readability -->
    <div class="position-absolute top-0 start-0 w-100 h-100" 
         style="background: rgba(0,0,0,0.6); z-index: 2;">
    </div>

    <!-- Content -->
    <div class="container position-relative z-3" style="z-index: 3;">
        <div class="row align-items-center">
            <div class="col-lg-8" data-aos="fade-right">
                <h1 class="display-4 fw-bold mb-4">
                    Hi, I'm <span class="text-warning">Rajnish Tamrakar</span>
                </h1>
                <h2 class="h4 mb-4 opacity-90">Laravel Developer</h2>
                <p class="lead mb-4 opacity-80">
                    I create beautiful, responsive web applications using modern technologies.
                    Passionate about clean code, user experience, and continuous learning.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="{{ route('projects.index') }}" class="btn btn-primary btn-lg">
                        <i class="bi bi-folder me-2"></i>View My Work
                    </a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg">
                        <i class="bi bi-envelope me-2"></i>Get In Touch
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- About Preview Section -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="h1 mb-4">About Me</h2>
                <p class="lead mb-4">
                    I'm a passionate Laravel and Node.js developer with over 2 years of experience
                    building web applications that solve real-world problems.
                </p>
                <p class="mb-4">
                    My journey in web development started with a curiosity about how websites work,
                    and it has evolved into a career focused on creating exceptional digital experiences.
                    I specialize in Laravel and modern web technologies.
                </p>
                <div class="row g-4 mb-4">
                    <div class="col-6">
                        <div class="text-center">
                            <h3 class="h2 text-primary mb-1">{{ $featuredProjects->count() }}+</h3>
                            <p class="mb-0">Projects Completed</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-center">
                            <h3 class="h2 text-primary mb-1">2+</h3>
                            <p class="mb-0">Years Experience</p>
                        </div>
                    </div>
                </div>
                <a href="{{ route('about') }}" class="btn btn-primary">
                    Learn More About Me <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="row g-3">
                    <div class="col-6">
                        <img src="https://images.pexels.com/photos/574071/pexels-photo-574071.jpeg?auto=compress&cs=tinysrgb&w=400"
                            alt="Coding" class="img-fluid rounded">
                    </div>
                    <div class="col-6">
                        <img src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg?auto=compress&cs=tinysrgb&w=400"
                            alt="Workspace" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Projects Section -->
@if($featuredProjects->count() > 0)
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="h1 mb-3">Featured Projects</h2>
            <p class="lead">Here are some of my recent works that I'm proud of</p>
        </div>

        <div class="row g-4">
            @foreach($featuredProjects as $project)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="card h-100">
                    <img src="{{ $project->image_url }}" class="card-img-top" alt="{{ $project->title }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $project->title }}</h5>
                        <p class="card-text flex-grow-1">{{ $project->description }}</p>

                        <div class="mb-3">
                            @foreach($project->tech_stack as $tech)
                            <span class="tech-badge">{{ $tech }}</span>
                            @endforeach
                        </div>

                        <div class="d-flex gap-2">
                            @if($project->demo_url)
                            <a href="{{ $project->demo_url }}" class="btn btn-primary btn-sm" target="_blank">
                                <i class="bi bi-eye me-1"></i>Demo
                            </a>
                            @endif
                            @if($project->github_url)
                            <a href="{{ $project->github_url }}" class="btn btn-outline-primary btn-sm" target="_blank">
                                <i class="bi bi-github me-1"></i>Code
                            </a>
                            @endif
                            <a href="{{ route('projects.show', $project) }}" class="btn btn-outline-secondary btn-sm ms-auto">
                                Details <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-5" data-aos="fade-up">
            <a href="{{ route('projects.index') }}" class="btn btn-outline-primary btn-lg">
                View All Projects <i class="bi bi-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>
@endif

<!-- Skills Preview Section -->
@if($topSkills->count() > 0)
<section class="section-padding bg-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="h1 mb-3">My Skills</h2>
            <p class="lead">Technologies and tools I work with</p>
        </div>

        <div class="row g-4">
            @foreach($topSkills as $skill)
            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
                <div class="skill-item">
                    @if($skill->icon)
                    <i class="{{ $skill->icon }} fs-1 mb-3" style="color: {{ $skill->color }}"></i>
                    @else
                    <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                        style="width: 60px; height: 60px; background-color: {{ $skill->color }} !important;">
                        <span class="text-white fw-bold">{{ substr($skill->name, 0, 2) }}</span>
                    </div>
                    @endif
                    <h5 class="mb-2">{{ $skill->name }}</h5>
                    <div class="progress mb-2">
                        <div class="progress-bar" role="progressbar"
                            style="width: {{ $skill->proficiency }}%; background-color: {{ $skill->color }};"
                            aria-valuenow="{{ $skill->proficiency }}" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                    <small class="text-muted">{{ $skill->proficiency }}%</small>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-5" data-aos="fade-up">
            <a href="{{ route('skills') }}" class="btn btn-outline-primary btn-lg">
                View All Skills <i class="bi bi-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>
@endif

<!-- CTA Section -->
<section class="section-padding text-white hero-section-footer">
    <div class="container text-center" data-aos="fade-up">
        <h2 class="h1 mb-4">Ready to Work Together?</h2>
        <p class="lead mb-4">
            I'm always interested in new opportunities and exciting projects.
            Let's discuss how we can bring your ideas to life.
        </p>
        <a href="{{ route('contact') }}" class="btn btn-warning btn-lg">
            <i class="bi bi-envelope me-2"></i>Get In Touch
        </a>
    </div>
</section>
@endsection