@extends('layouts.app')

@section('title', 'Skills')

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="hero-content text-center" data-aos="fade-up">
            <h1 class="display-4 fw-bold mb-4">My Skills</h1>
            <p class="lead opacity-90">
                Technologies, tools, and frameworks I use to build amazing web experiences
            </p>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section class="section-padding">
    <div class="container">
        @if($skillsByCategory->count() > 0)
            @foreach($skillsByCategory as $category => $skills)
            <div class="mb-5" data-aos="fade-up">
                <div class="text-center mb-4">
                    <h2 class="h1 mb-2">{{ ucfirst($category) }}</h2>
                    <div class="bg-primary mx-auto" style="height: 3px; width: 60px; border-radius: 2px;"></div>
                </div>
                
                <div class="row g-4">
                    @foreach($skills as $skill)
                    <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
                        <div class="skill-item h-100">
                            @if($skill->icon)
                                <i class="{{ $skill->icon }} fs-1 mb-3" style="color: {{ $skill->color }}"></i>
                            @else
                                <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" 
                                     style="width: 60px; height: 60px; background-color: {{ $skill->color }} !important;">
                                    <span class="text-white fw-bold fs-5">{{ substr($skill->name, 0, 2) }}</span>
                                </div>
                            @endif
                            
                            <h5 class="mb-3">{{ $skill->name }}</h5>
                            
                            <div class="progress mb-2" style="height: 8px;">
                                <div class="progress-bar progress-bar-animated" 
                                     role="progressbar" 
                                     style="width: {{ $skill->proficiency }}%; background-color: {{ $skill->color }};" 
                                     aria-valuenow="{{ $skill->proficiency }}" 
                                     aria-valuemin="0" 
                                     aria-valuemax="100">
                                </div>
                            </div>
                            
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">Proficiency</small>
                                <small class="fw-bold" style="color: {{ $skill->color }}">{{ $skill->proficiency }}%</small>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        @else
            <div class="text-center py-5" data-aos="fade-up">
                <div class="mb-4">
                    <i class="bi bi-tools display-1 text-muted"></i>
                </div>
                <h3>No Skills Listed</h3>
                <p class="text-muted">Skills information will be available soon.</p>
            </div>
        @endif
    </div>
</section>

<!-- Skills Summary -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                <h2 class="h1 mb-4">Continuous Learning</h2>
                <p class="lead mb-4">
                    Technology evolves rapidly, and I believe in staying current with the latest trends, 
                    tools, and best practices in web development.
                </p>
                <p class="mb-4">
                    I regularly participate in online courses, attend webinars, contribute to open-source projects, 
                    and experiment with new technologies to expand my skill set and deliver better solutions.
                </p>
                
                <div class="row g-4 mt-4">
                    <div class="col-md-4">
                        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" 
                             style="width: 80px; height: 80px;">
                            <i class="bi bi-book fs-2"></i>
                        </div>
                        <h4>Learning</h4>
                        <p>Always exploring new technologies and improving existing skills.</p>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" 
                             style="width: 80px; height: 80px;">
                            <i class="bi bi-code-square fs-2"></i>
                        </div>
                        <h4>Practice</h4>
                        <p>Building projects and contributing to open-source communities.</p>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="bg-warning text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" 
                             style="width: 80px; height: 80px;">
                            <i class="bi bi-people fs-2"></i>
                        </div>
                        <h4>Sharing</h4>
                        <p>Teaching others and sharing knowledge through mentoring and writing.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Certifications & Learning -->
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="h1 mb-3">Certifications & Learning</h2>
            <p class="lead">Continuous professional development and certifications</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center">
                        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" 
                             style="width: 60px; height: 60px;">
                            <i class="bi bi-award fs-3"></i>
                        </div>
                        <h5 class="card-title">AWS Certified</h5>
                        <p class="card-text">Cloud Solutions Architecture and deployment best practices.</p>
                        <small class="text-muted">2023</small>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center">
                        <div class="bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" 
                             style="width: 60px; height: 60px;">
                            <i class="bi bi-shield-check fs-3"></i>
                        </div>
                        <h5 class="card-title">Security+</h5>
                        <p class="card-text">Web application security and secure coding practices.</p>
                        <small class="text-muted">2022</small>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center">
                        <div class="bg-warning text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" 
                             style="width: 60px; height: 60px;">
                            <i class="bi bi-graph-up fs-3"></i>
                        </div>
                        <h5 class="card-title">Google Analytics</h5>
                        <p class="card-text">Web analytics and performance optimization strategies.</p>
                        <small class="text-muted">2023</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section-padding text-white hero-section-footer">
    <div class="container text-center" data-aos="fade-up">
        <h2 class="h1 mb-4">Let's Build Something Great</h2>
        <p class="lead mb-4">
            Ready to leverage these skills for your next project? 
            I'd love to discuss how we can work together.
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <a href="{{ route('contact') }}" class="btn btn-warning btn-lg">
                <i class="bi bi-envelope me-2"></i>Start a Project
            </a>
            <a href="{{ route('projects.index') }}" class="btn btn-outline-light btn-lg">
                <i class="bi bi-folder me-2"></i>View My Work
            </a>
        </div>
    </div>
</section>
@endsection