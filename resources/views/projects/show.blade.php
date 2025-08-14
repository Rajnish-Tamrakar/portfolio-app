@extends('layouts.app')

@section('title', $project->title)

@section('content')
<!-- Project Hero -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb" data-aos="fade-up">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('projects.index') }}">Projects</a></li>
                        <li class="breadcrumb-item active">{{ $project->title }}</li>
                    </ol>
                </nav>
                
                <!-- Project Header -->
                <div class="text-center mb-5" data-aos="fade-up">
                    @if($project->featured)
                        <span class="badge bg-warning mb-3">
                            <i class="bi bi-star-fill me-1"></i>Featured Project
                        </span>
                    @endif
                    <h1 class="display-4 fw-bold mb-3">{{ $project->title }}</h1>
                    <p class="lead text-muted">{{ $project->description }}</p>
                    
                    <!-- Action Buttons -->
                    <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
                        @if($project->demo_url)
                            <a href="{{ $project->demo_url }}" class="btn btn-primary btn-lg" target="_blank">
                                <i class="bi bi-eye me-2"></i>View Live Demo
                            </a>
                        @endif
                        @if($project->github_url)
                            <a href="{{ $project->github_url }}" class="btn btn-outline-primary btn-lg" target="_blank">
                                <i class="bi bi-github me-2"></i>View Source Code
                            </a>
                        @endif
                    </div>
                </div>
                
                <!-- Project Image -->
                <div class="mb-5" data-aos="fade-up">
                    <img src="{{ $project->image_url }}" alt="{{ $project->title }}" 
                         class="img-fluid rounded shadow-lg">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project Details -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Project Description -->
                <div class="mb-5" data-aos="fade-right">
                    <h2 class="h1 mb-4">Project Overview</h2>
                    @if($project->long_description)
                        <div class="content">
                            {!! nl2br(e($project->long_description)) !!}
                        </div>
                    @else
                        <p class="lead">{{ $project->description }}</p>
                        <p>
                            This project showcases modern web development practices and demonstrates 
                            proficiency in various technologies. It was built with attention to detail, 
                            focusing on user experience, performance, and maintainable code architecture.
                        </p>
                        <p>
                            The development process involved careful planning, iterative development, 
                            and thorough testing to ensure a robust and scalable solution.
                        </p>
                    @endif
                </div>
                
                <!-- Features Section -->
                <div class="mb-5" data-aos="fade-right">
                    <h3 class="mb-4">Key Features</h3>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-success me-3 mt-1"></i>
                                <div>
                                    <h6 class="mb-1">Responsive Design</h6>
                                    <small class="text-muted">Works perfectly on all devices</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-success me-3 mt-1"></i>
                                <div>
                                    <h6 class="mb-1">Modern UI/UX</h6>
                                    <small class="text-muted">Clean and intuitive interface</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-success me-3 mt-1"></i>
                                <div>
                                    <h6 class="mb-1">Performance Optimized</h6>
                                    <small class="text-muted">Fast loading and smooth interactions</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-success me-3 mt-1"></i>
                                <div>
                                    <h6 class="mb-1">Secure & Reliable</h6>
                                    <small class="text-muted">Built with security best practices</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <!-- Project Info Sidebar -->
                <div class="card border-0 shadow-sm mb-4" data-aos="fade-left">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Project Details</h5>
                        
                        <div class="mb-3">
                            <h6 class="text-muted mb-2">Technologies Used</h6>
                            <div>
                                @foreach($project->tech_stack as $tech)
                                    <span class="tech-badge">{{ $tech }}</span>
                                @endforeach
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <h6 class="text-muted mb-2">Project Type</h6>
                            <p class="mb-0">Web Application</p>
                        </div>
                        
                        <div class="mb-3">
                            <h6 class="text-muted mb-2">Completion Date</h6>
                            <p class="mb-0">{{ $project->created_at->format('F Y') }}</p>
                        </div>
                        
                        @if($project->demo_url || $project->github_url)
                        <hr>
                        <div class="d-grid gap-2">
                            @if($project->demo_url)
                                <a href="{{ $project->demo_url }}" class="btn btn-primary" target="_blank">
                                    <i class="bi bi-eye me-2"></i>Live Demo
                                </a>
                            @endif
                            @if($project->github_url)
                                <a href="{{ $project->github_url }}" class="btn btn-outline-primary" target="_blank">
                                    <i class="bi bi-github me-2"></i>Source Code
                                </a>
                            @endif
                        </div>
                        @endif
                    </div>
                </div>
                
                <!-- Share Section -->
                <div class="card border-0 shadow-sm" data-aos="fade-left" data-aos-delay="100">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Share This Project</h5>
                        <div class="d-flex gap-2">
                            <a href="https://twitter.com/intent/tweet?text={{ urlencode($project->title) }}&url={{ urlencode(request()->fullUrl()) }}" 
                               class="btn btn-outline-primary btn-sm" target="_blank">
                                <i class="bi bi-twitter"></i>
                            </a>
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->fullUrl()) }}" 
                               class="btn btn-outline-primary btn-sm" target="_blank">
                                <i class="bi bi-linkedin"></i>
                            </a>
                            <button class="btn btn-outline-primary btn-sm" onclick="copyToClipboard('{{ request()->fullUrl() }}')">
                                <i class="bi bi-link-45deg"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Projects -->
@if($relatedProjects->count() > 0)
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="h1 mb-3">Related Projects</h2>
            <p class="lead">Check out these other projects you might find interesting</p>
        </div>
        
        <div class="row g-4">
            @foreach($relatedProjects as $relatedProject)
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="card h-100">
                    <img src="{{ $relatedProject->image_url }}" class="card-img-top" alt="{{ $relatedProject->title }}" 
                         style="height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $relatedProject->title }}</h5>
                        <p class="card-text flex-grow-1">{{ $relatedProject->description }}</p>
                        
                        <div class="mb-3">
                            @foreach(array_slice($relatedProject->tech_stack, 0, 3) as $tech)
                                <span class="tech-badge">{{ $tech }}</span>
                            @endforeach
                            @if(count($relatedProject->tech_stack) > 3)
                                <span class="tech-badge">+{{ count($relatedProject->tech_stack) - 3 }}</span>
                            @endif
                        </div>
                        
                        <a href="{{ route('projects.show', $relatedProject) }}" class="btn btn-outline-primary">
                            View Project <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>  
</section>
@endif

<!-- CTA Section -->
<section class="section-padding hero-section-footer text-white">
    <div class="container text-center" data-aos="fade-up">
        <h2 class="h1 mb-4">Interested in Working Together?</h2>
        <p class="lead mb-4">
            I'm always open to discus  sing new projects and opportunities. 
            Let's create something amazing together!
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <a href="{{ route('contact') }}" class="btn btn-warning btn-lg">
                <i class="bi bi-envelope me-2"></i>Get In Touch
            </a>
            <a href="{{ route('projects.index') }}" class="btn btn-outline-light btn-lg">
                <i class="bi bi-arrow-left me-2"></i>Back to Projects
            </a>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
function copyToClipboard(text) {
    navigator.clipboard.writeText(text).then(function() {
        // Show success message
        const toast = document.createElement('div');
        toast.className = 'toast align-items-center text-white bg-success border-0 position-fixed top-0 end-0 m-3';
        toast.style.zIndex = '9999';
        toast.innerHTML = `
            <div class="d-flex">
                <div class="toast-body">
                    Link copied to clipboard!
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
            </div>
        `;
        document.body.appendChild(toast);
        
        const bsToast = new bootstrap.Toast(toast);
        bsToast.show();
        
        toast.addEventListener('hidden.bs.toast', function() {
            document.body.removeChild(toast);
        });
    });
}
</script>
@endpush