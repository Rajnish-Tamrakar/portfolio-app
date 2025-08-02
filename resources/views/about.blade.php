@extends('layouts.app')

@section('title', 'About Me')

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 hero-content" data-aos="fade-right">
                <h1 class="display-4 fw-bold mb-4">About Me</h1>
                <p class="lead opacity-90">
                    Passionate full-stack developer with a love for creating 
                    innovative web solutions and learning new technologies.
                </p>
            </div>
            <div class="col-lg-6 text-center" data-aos="fade-left">
                <img src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=500" 
                     alt="About Me" class="img-fluid rounded-circle" style="width: 300px; height: 300px; object-fit: cover;">
            </div>
        </div>
    </div>
</section>

<!-- Personal Background -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div data-aos="fade-up">
                    <h2 class="h1 mb-4">My Story</h2>
                    <p class="lead mb-4">
                        Hello! I'm John Doe, a passionate full-stack developer based in San Francisco. 
                        My journey into web development began during my computer science studies, 
                        where I discovered my love for creating digital solutions that make a difference.
                    </p>
                    
                    <p class="mb-4">
                        Over the past 3 years, I've had the privilege of working with various clients 
                        and companies, helping them bring their digital visions to life. I specialize 
                        in building scalable web applications using modern technologies like Laravel, 
                        Vue.js, React, and Node.js.
                    </p>
                    
                    <p class="mb-4">
                        When I'm not coding, you can find me exploring new technologies, contributing 
                        to open-source projects, or enjoying the great outdoors. I believe in continuous 
                        learning and staying up-to-date with the latest industry trends and best practices.
                    </p>
                    
                    <div class="row g-4 mb-5">
                        <div class="col-md-4 text-center">
                            <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" 
                                 style="width: 80px; height: 80px;">
                                <i class="bi bi-code-slash fs-2"></i>
                            </div>
                            <h4>Clean Code</h4>
                            <p>Writing maintainable, scalable, and well-documented code.</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" 
                                 style="width: 80px; height: 80px;">
                                <i class="bi bi-people fs-2"></i>
                            </div>
                            <h4>Collaboration</h4>
                            <p>Working effectively with teams and stakeholders.</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="bg-warning text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" 
                                 style="width: 80px; height: 80px;">
                                <i class="bi bi-lightbulb fs-2"></i>
                            </div>
                            <h4>Innovation</h4>
                            <p>Always exploring new technologies and creative solutions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Experience Section -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="h1 mb-5">Experience</h2>
                
                @foreach($experience as $exp)
                <div class="timeline-item">
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title mb-1">{{ $exp['position'] }}</h5>
                                <span class="badge bg-primary">{{ $exp['period'] }}</span>
                            </div>
                            <h6 class="text-muted mb-3">{{ $exp['company'] }}</h6>
                            <p class="card-text mb-3">{{ $exp['description'] }}</p>
                            
                            @if(isset($exp['achievements']))
                            <h6 class="mb-2">Key Achievements:</h6>
                            <ul class="list-unstyled">
                                @foreach($exp['achievements'] as $achievement)
                                <li class="mb-1">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    {{ $achievement }}
                                </li>
                                @endforeach
                            </ul>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="h1 mb-5">Education</h2>
                
                @foreach($education as $edu)
                <div class="timeline-item">
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title mb-1">{{ $edu['degree'] }}</h5>
                                <span class="badge bg-secondary">{{ $edu['year'] }}</span>
                            </div>
                            <h6 class="text-muted mb-3">{{ $edu['institution'] }}</h6>
                            <p class="card-text">{{ $edu['description'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Personal Interests -->
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="h1 mb-3">Beyond Coding</h2>
            <p class="lead">What I enjoy doing in my free time</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="0">
                <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" 
                     style="width: 80px; height: 80px;">
                    <i class="bi bi-camera fs-2"></i>
                </div>
                <h4>Photography</h4>
                <p>Capturing moments and exploring creative perspectives through the lens.</p>
            </div>
            
            <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" 
                     style="width: 80px; height: 80px;">
                    <i class="bi bi-tree fs-2"></i>
                </div>
                <h4>Hiking</h4>
                <p>Exploring nature trails and finding inspiration in the great outdoors.</p>
            </div>
            
            <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-warning text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" 
                     style="width: 80px; height: 80px;">
                    <i class="bi bi-book fs-2"></i>
                </div>
                <h4>Reading</h4>
                <p>Staying updated with tech blogs, books, and industry publications.</p>
            </div>
            
            <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="bg-info text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" 
                     style="width: 80px; height: 80px;">
                    <i class="bi bi-music-note fs-2"></i>
                </div>
                <h4>Music</h4>
                <p>Playing guitar and discovering new artists across different genres.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section-padding bg-primary text-white">
    <div class="container text-center" data-aos="fade-up">
        <h2 class="h1 mb-4">Let's Work Together</h2>
        <p class="lead mb-4">
            Interested in collaborating on a project or just want to say hello? 
            I'd love to hear from you!
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <a href="{{ route('contact') }}" class="btn btn-warning btn-lg">
                <i class="bi bi-envelope me-2"></i>Get In Touch
            </a>
            <a href="{{ route('projects.index') }}" class="btn btn-outline-light btn-lg">
                <i class="bi bi-folder me-2"></i>View My Work
            </a>
        </div>
    </div>
</section>
@endsection