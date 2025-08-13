@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="hero-content text-center" data-aos="fade-up">
            <h1 class="display-4 fw-bold mb-4">My Projects</h1>
            <p class="lead opacity-90">
                A collection of web applications and projects I've built using various technologies
            </p>
        </div>
    </div>
</section>

<!-- Filter Section -->
<section class="py-4 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h5 class="mb-0">{{ $projects->total() }} Projects Found</h5>
            </div>
            <div class="col-md-6">
                <form method="GET" action="{{ route('projects.index') }}" class="d-flex">
                    <select name="tech" class="form-select me-2" onchange="this.form.submit()">
                        <option value="">All Technologies</option>
                        @foreach($allTechnologies as $tech)
                            <option value="{{ $tech }}" {{ request('tech') === $tech ? 'selected' : '' }}>
                                {{ $tech }}
                            </option>
                        @endforeach
                    </select>
                    @if(request('tech'))
                        <a href="{{ route('projects.index') }}" class="btn btn-outline-secondary">
                            <i class="bi bi-x"></i>
                        </a>
                    @endif
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Projects Grid -->
<section class="section-padding">
    <div class="container">
        @if($projects->count() > 0)
            <div class="row g-4">
                @foreach($projects as $project)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="card h-100">
                        <div class="position-relative">
                            <img src="{{ $project->image_url }}" class="card-img-top" alt="{{ $project->title }}" 
                                 style="height: 250px; object-fit: cover;">
                            @if($project->featured)
                                <span class="position-absolute top-0 end-0 badge bg-warning m-2">
                                    <i class="bi bi-star-fill me-1"></i>Featured
                                </span>
                            @endif
                        </div>
                        
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $project->title }}</h5>
                            <p class="card-text flex-grow-1">{{ $project->description }}</p>
                            
                            <div class="mb-3">
                                @foreach($project->tech_stack as $tech)
                                    <span class="tech-badge">{{ $tech }}</span>
                                @endforeach
                            </div>
                            
                            <div class="d-flex gap-2 mt-auto">
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
            
            <!-- Pagination -->
            @if($projects->hasPages())
            <div class="d-flex justify-content-center mt-5" data-aos="fade-up">
                {{ $projects->appends(request()->query())->links() }}
            </div>
            @endif
        @else
            <div class="text-center py-5" data-aos="fade-up">
                <div class="mb-4">
                    <i class="bi bi-folder-x display-1 text-muted"></i>
                </div>
                <h3>No Projects Found</h3>
                <p class="text-muted mb-4">
                    @if(request('tech'))
                        No projects found using "{{ request('tech') }}" technology.
                    @else
                        No projects available at the moment.
                    @endif
                </p>
                @if(request('tech'))
                    <a href="{{ route('projects.index') }}" class="btn btn-primary">
                        <i class="bi bi-arrow-left me-2"></i>View All Projects
                    </a>
                @endif
            </div>
        @endif
    </div>
</section>

<!-- CTA Section -->
<section class="section-padding text-white" style="background-color: #244166">
    <div class="container text-center" data-aos="fade-up">
        <h2 class="h1 mb-4">Have a Project in Mind?</h2>
        <p class="lead mb-4">
            I'm always excited to work on new and challenging projects. 
            Let's discuss how we can bring your ideas to life.
        </p>
        <a href="{{ route('contact') }}" class="btn btn-warning btn-lg">
            <i class="bi bi-envelope me-2"></i>Start a Conversation
        </a>
    </div>
</section>
@endsection