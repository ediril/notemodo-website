<?php require_once 'collectiq/component/WaitlistComponent.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notemodo - Publish Your Apple Notes to a Blog</title>
    <meta name="description" content="Transform your Apple Notes into beautiful blog posts with Notemodo. Seamlessly publish your thoughts and ideas from Apple Notes to your personal blog.">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Component CSS -->
    <link rel="stylesheet" href="/collectiq/component/assets/waitlist.css">

    <!-- Custom CSS -->
    <link href="styles.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="logo-sm.png" alt="Notemodo">
                Notemodo
            </a>
            <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pricing.php">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#newsletter">Waitlist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-nav-cta" href="#newsletter">Get Updates</a>
                    </li>
                </ul>
            </div>-->
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-start text-white">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-10">
                    <div class="hero-content">
                        <h1 class="hero-title pb-4 opacity-85">From Apple Notes to Blog Posts</h1>
                        <h2 class="fs-4 hero-subtitle pb-4 mx-auto" style="max-width: 600px;">
                            <span class="gradient-accent">Notemodo automatically publishes</span> your Apple Notes to an SEO-friendly blog.
                            No coding or design skills required, just write and publish.
                        </h2>
                        <br>
                        <div class="hero-buttons">
                            <a href="#features" class="btn-hero btn-primary-hero me-2">Learn More</a>
                            <a href="#newsletter" class="btn-hero btn-secondary-hero">Join Waitlist</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-5" style="background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);">
        <div class="container">
            <div class="text-center mb-5">
                <p class="text-uppercase fw-semibold mb-2 section-label">A Unique Blogging Platform</p>
                <h2 class="display-4 fw-bold mb-3" style="color: var(--dark-blue);">Why Choose Notemodo?</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-xl-4">
                    <div class="feature-card h-100">
                        <div class="d-flex align-items-center mb-3">
                            <div class="feature-icon me-3">📝</div>
                            <h3 class="h5 fw-bold mb-0" style="color: var(--dark-blue);">Native Apple Notes Integration</h3>
                        </div>
                        <p class="text-muted">Direct connection to your Apple Notes app. No need to copy and paste - publish directly from your notes.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="feature-card h-100">
                        <div class="d-flex align-items-center mb-3">
                            <div class="feature-icon me-3">✨</div>
                            <h3 class="h5 fw-bold mb-0" style="color: var(--dark-blue);">Beautiful Formatting</h3>
                        </div>
                        <p class="text-muted">Smart formatting engine that will automatically convert your notes into beautiful blog posts with perfect styling.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="feature-card h-100">
                        <div class="d-flex align-items-center mb-3">
                            <div class="feature-icon me-3">🎨</div>
                            <h3 class="h5 fw-bold mb-0" style="color: var(--dark-blue);">Customizable Themes</h3>
                        </div>
                        <p class="text-muted">Beautiful, customizable blog themes that will match your style and personality. Make your blog uniquely yours.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="feature-card h-100">
                        <div class="d-flex align-items-center mb-3">
                            <div class="feature-icon me-3">🔒</div>
                            <h3 class="h5 fw-bold mb-0" style="color: var(--dark-blue);">Privacy Focused</h3>
                        </div>
                        <p class="text-muted">You control what gets published. Keep your private notes private while sharing what matters.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <!--<section class="py-5 text-white" style="background: var(--dark-blue);">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6 text-center p-3">
                    <div class="stat-number display-4 fw-bold mb-2">5K+</div>
                    <div class="opacity-75">Waitlist Signups</div>
                </div>
                <div class="col-md-3 col-6 text-center p-3">
                    <div class="stat-number display-4 fw-bold mb-2">2024</div>
                    <div class="opacity-75">Launch Year</div>
                </div>
                <div class="col-md-3 col-6 text-center p-3">
                    <div class="stat-number display-4 fw-bold mb-2">3</div>
                    <div class="opacity-75">Platforms</div>
                </div>
                <div class="col-md-3 col-6 text-center p-3">
                    <div class="stat-number display-4 fw-bold mb-2">∞</div>
                    <div class="opacity-75">Publishing Possibilities</div>
                </div>
            </div>
        </div>
    </section>-->

    <!-- Email Capture Section -->
    <section id="newsletter" class="py-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
        <div class="container">
            <div class="email-capture-card text-center">
                <h2 class="display-4 fw-bold mb-3">Join the Waitlist</h2>
                <p class="fs-5 opacity-75">Stay in the loop and be the first to know when launch</p>
                <div class="d-flex justify-content-center pb-3 mb-3 gap-4 flex-wrap">
                    <div class="email-benefit text-muted">Early access</div>
                    <div class="email-benefit text-muted">Special pricing</div>
                </div>
                <?php 
                    $waitlist = new WaitlistComponent();
                    echo $waitlist->renderForm(); 
                ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-4 text-white" style="background: var(--dark-blue);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="mb-0">🌘 Newmoon Software &copy; <?php echo date('Y'); ?> All rights reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="/collectiq/component/assets/waitlist.js"></script>
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>