    <!-- Footer -->
    <footer class="py-4 text-white" style="background: var(--dark-blue);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="mb-3">
                        <a href="blog.php" class="text-white-50 me-3 text-decoration-none footer-link">Blog</a>
                        <a href="privacy.php" class="text-white-50 me-3 text-decoration-none footer-link">Privacy</a>
                        <a href="terms.php" class="text-white-50 text-decoration-none footer-link">Terms</a>
                    </div>
                    <p class="mb-0">🌘 Newmoon Software &copy; <?php echo date('Y'); ?> All rights reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <script async src="https://scripts.simpleanalyticscdn.com/latest.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="/collectiq/component/assets/waitlist.js"></script>
    <script>
        // Handle anchor links and update URL
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    // Update URL with hash
                    history.pushState(null, null, this.getAttribute('href'));
                    
                    // Scroll to target
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Handle page load with hash
        window.addEventListener('load', function() {
            if (window.location.hash) {
                const target = document.querySelector(window.location.hash);
                if (target) {
                    setTimeout(() => {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }, 100);
                }
            }
        });
    </script>