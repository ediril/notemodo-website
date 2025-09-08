<?php require_once 'collectiq/component/WaitlistComponent.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'partials/head.php'; ?>
<body>
<?php 
$heroButtons = true;
include 'partials/hero.php'; 
?>

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
    <section id="cta-action" class="py-5">
        <div class="container">
            <div class="email-capture-card text-center">
                <h2 class="display-4 fw-bold mb-3">Join the Waitlist</h2>
                <p class="fs-5 opacity-75">Stay in the loop and be the first to know when we launch</p>
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

<?php include 'partials/footer.php'; ?>
</body>
</html>