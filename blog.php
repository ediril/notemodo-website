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
                            'date' => '2025-09-28',
                            'title' => 'Waitlist',
                            'content' => "Now that there are some folks in the waitlist, I need to update them periodically. I researched tools to send emails a bit. The contenders are: MailerLite, Kit, Beehiiv, SendPulse, EmailOctopus

                                         I asked Perplexity and ChatGPT, they both recommended MailerLite or EmailOctopus since I don’t need anything heavy to get started but have enough room to grow."
                        ],

                        [
                            'date' => '2025-09-25',
                            'title' => 'A New Direction',
                            'content' => "One tricky bit of Notemodo is that it has to have a local component that exports the Apple Notes db. 

                                        This is a protected file so it requires the user to install a small module and give it permissions to do so. I want to keep that bit as small as possible so fewer things can go wrong. 

                                        The rest of the functionality will be in the cloud where I can easily control/upgrade/modify without having to update the local module."
                        ],
                        [
                            'date' => '2025-09-07',
                            'title' => 'Publish or Not Publish',
                            'content' => "I worked on a couple of things today:

                            • Improved the app so it can better detect whether you just added a #publish tag or made more substantial changes to a note. If you just added the tag to publish a note, it will keep the original last modified time of the note so you don't lose that metadata.
                            
                            • The MVP I built uses pandoc to convert ...
                            
                            Oh wait, let me first tell you an important side-benefit you get from using Notemodo. Just like every Apple Notes user, I'm also interested in being able to export my notes. It is a pain though since Apple doesn't make that easy. Well folks, Notemodo makes it possible and easy! 
                            
                            Currently it will only export the notes that you want to publish, but if it proves to be as valuable as I think it will be, we can make it an offical feature we support.

                            Ok going back to the what I did I was saying, the MVP I built exports a note as markdown file and then uses pandoc to convert it to HTML. 
                            
                            Pandoc is a great, but I decided to move away from it because it makes web templates hard to implement. Instead, we'll use golang templates, which could open up the door to using things like Hugo templates."
                        ],
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
                    <?php 
                    // Create a URL-friendly slug from the title
                    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $post['title']), '-'));
                    ?>
                    <article class="feature-card mb-4 overflow-hidden" id="<?php echo $slug; ?>">
                        <div class="p-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex gap-3 text-muted small">
                                    <span><?php echo date('M j, Y', strtotime($post['date'])); ?></span>
                                </div>
                            </div>
                            
                            <h3 class="h4 mb-3" style="color: var(--dark-blue);">
                                <a href="#<?php echo $slug; ?>" class="text-decoration-none" style="color: var(--dark-blue);"><?php echo htmlspecialchars($post['title']); ?></a>
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