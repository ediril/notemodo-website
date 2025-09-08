<?php 
$pageTitle = 'Blog - Notemodo';
$pageDescription = 'Read the latest news and updates from Notemodo about Apple Notes integration and blogging tips.';
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'partials/head.php'; ?>
<body>
<?php include 'partials/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-start text-white">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-10">
                    <div class="hero-content">
                        <h1 class="hero-title pb-4 opacity-85">Notemodo Blog</h1>
                        <h2 class="fs-4 hero-subtitle pb-4 mx-auto" style="max-width: 600px;">
                            <span class="gradient-accent">Stay updated</span> with the latest news, tips, and insights about Apple Notes and blogging.
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Posts Section -->
    <section id="blog-posts" class="py-5" style="background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8 col-xl-6 mx-auto">
                    <div class="feature-card h-100">
                        <h3 class="h4 fw-bold mb-3" style="color: var(--dark-blue);">Coming Soon</h3>
                        <p class="text-muted">We're working on bringing you valuable content about Apple Notes integration, blogging best practices, and productivity tips. Check back soon for our latest posts!</p>
                        <div class="mt-4">
                            <a href="index.php" class="btn btn-outline-primary">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'partials/footer.php'; ?>
</body>
</html>