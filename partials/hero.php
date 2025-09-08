    <!-- Hero Section with Navigation -->
    <section class="hero-section d-flex flex-column text-white">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-custom">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="logo-sm.png" alt="Notemodo">
                    Notemodo
                </a>
            </div>
        </nav>
        
        <!-- Hero Content -->
        <div class="container flex-grow-1 d-flex align-items-center">
            <div class="row justify-content-center text-center w-100">
                <div class="col-lg-10">
                    <div class="hero-content pt-4">
                        <h1 class="hero-title pb-4 opacity-85"><?php echo isset($heroTitle) ? $heroTitle : 'From Apple Notes<br>to Blog Posts'; ?></h1>
                        <h2 class="fs-4 hero-subtitle pb-4 mx-auto" style="max-width: 600px;">
                            <?php echo isset($heroSubtitle) ? $heroSubtitle : '<span class="gradient-accent">Notemodo automatically publishes</span> your Apple Notes to an SEO-friendly blog. No coding or design skills required, just write and publish.'; ?>
                        </h2>
                        <?php if (isset($heroButtons) && $heroButtons): ?>
                        <br>
                        <div class="hero-buttons mb-5">
                            <a href="#features" class="btn-hero btn-primary-hero me-2">Learn More</a>
                            <a href="#cta-action" class="btn-hero btn-secondary-hero">Join Waitlist</a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>