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

    <script async src="https://scripts.simpleanalyticscdn.com/latest.js"></script>
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