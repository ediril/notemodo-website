<?php 
$pageTitle = 'Blog - Notemodo';
$pageDescription = 'Read the latest news and updates from Notemodo about Apple Notes integration and blogging tips.';
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'partials/head.php'; ?>
<body>
<?php 
$heroTitle = 'Notemodo Blog';
$heroSubtitle = '<span class="gradient-accent">Stay updated</span> with the latest news, tips, and insights about Apple Notes and blogging.';
include 'partials/hero.php'; 
?>

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