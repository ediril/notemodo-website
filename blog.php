<?php 
$pageTitle = 'Blog - Notemodo';
$pageDescription = 'Read the latest news and updates from Notemodo.';
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'partials/head.php'; ?>
<body>
<?php 
$heroTitle = 'Notemodo Blog';
$heroSubtitle = '<span class="gradient-accent">Stay updated</span> with the latest news, tips, and insights about Notemodo.';
include 'partials/hero.php'; 
?>

    <!-- Blog Posts Section -->
    <section id="blog-posts" class="py-5" style="background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <?php 
                    $blogPosts = [
                        [
                            'date' => '2025-08-26',
                            'title' => 'Hello World',
                            'content' => "I'm excited to launch the Notemodo blog because the very MVP version of this app is complete as of today. And what is that? I can add a #publish to a note in Apple Notes and watch it go live on my blog!

                            It is not as polished as this could be. It is a bit manual at the moment. I need to run the app to generate the HTML files for the index of notes and the notes themselves. And then I need to manually move those files to the webserver. But that's why it is an MVP, right?

                            What's next? Well, more polish, such as:
                            • Making the app a daemon so it runs in the background instead having to be manually triggered
                            • A proper installation process for the app
                            • Automating the file transfer to the webserver
                            • Adding more customization options for the design of the pages.

                            and so on and so forth..

                            Stay with me and we'll get it all done and build an amazing app that will also get you blogging from your Apple Notes."
                        ],
                    ];
                    
                    foreach ($blogPosts as $post): 
                    ?>
                    <article class="feature-card mb-4 overflow-hidden">
                        <div class="p-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex gap-3 text-muted small">
                                    <span><?php echo date('M j, Y', strtotime($post['date'])); ?></span>
                                </div>
                            </div>
                            
                            <h3 class="h4 mb-3" style="color: var(--dark-blue);">
                                <?php echo htmlspecialchars($post['title']); ?>
                            </h3>
                            
                            <div class="text-muted mb-0"><?php echo nl2br(htmlspecialchars($post['content'])); ?></div>
                        </div>
                    </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

<?php include 'partials/footer.php'; ?>
</body>
</html>