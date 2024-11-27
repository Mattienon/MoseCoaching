<?php
/* Template Name: Contact Page */
get_header(); ?>

<main class="container my-5">

    <div class="row">
        <!-- Contact Form Column -->
        <?php 
        $contact_text = get_field('contact_info_text') ?: 'On-Site Visit'; // Default title
        ?>
        <div class="col-md-6">
            <h1 class="mb-3 title-contact">Contact</h1>
            
            <p class="info-text"><?php echo esc_html($contact_text); ?></p> <!-- Display the info title -->
            
            <!-- Include Contact Form 7 Shortcode -->
            <?php echo do_shortcode('[contact-form-7 id="060d347" title="mose coaching"]'); ?>
        </div>

        <!-- Contact Information Column -->
        <div class="col-md-6 scroll-fade-in scroll-fade-out">
            <?php 
            $info_title = get_field('info_title') ?: 'What Our Clients Say'; // Default title
            $location = get_field('location') ?: '6700 Esbjerg'; // Default location
            $phone = get_field('phone') ?: '+45 ?? ?? ?? ??'; // Default phone number
            $email = get_field('email') ?: 'JakobMoseCoaching@gmail.com'; // Default email
            ?>
            <div class="contact-info d-flex flex-column align-items-start">
                <!-- Change <h2> to <h3> to avoid duplicate H1s -->
                <h2 class="info-title"><?php echo esc_html($info_title); ?></h2>

                <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-geo-alt me-2 text-white"></i>
                    <span><?php echo esc_html($location); ?></span>
                </div>

                <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-telephone me-2 text-white"></i>
                    <span><?php echo esc_html($phone); ?></span>
                </div>

                <div class="d-flex align-items-center">
                    <i class="bi bi-envelope-at me-2 text-white"></i>
                    <span><?php echo esc_html($email); ?></span>
                </div>
            </div>
        </div>
    </div>

    <hr class="mt-5 mb-5">

    <div class="row mt-5 scroll-fade-in scroll-fade-out">
        <?php 
        $section1 = get_field('section_contact_1') ?: 'On-Site Visit';
        $section2 = get_field('section_contact_1_text') ?: 'Visit us at our office for an in-person consultation.';
        $section3 = get_field('section_contact_2') ?: 'Social Media';
        $section4 = get_field('section_contact_2_text') ?: 'Follow us on social media for the latest updates.';
        ?>
        <div class="on-site-section col-md-6 mb-4">
            <i class="bi bi-globe fs-3 mb-3"></i>
            <h3><?php echo esc_html($section1); ?></h3>
            <p><?php echo esc_html($section2); ?></p>
        </div>

        <div class="so-me-section col-md-6 mb-4">
            <i class="bi bi-phone fs-3 mb-3"></i>
            <h3><?php echo esc_html($section4); ?></h3>
            <p><?php echo esc_html($section3); ?></p>
            
            <!-- Social Media Links -->
            <div class="social-media-links d-flex justify-content-center">
                <?php 
                // Get the social media URLs from ACF
                $linkedin_url = get_field('linkedin_url');
                $facebook_url = get_field('facebook_url');
                $instagram_url = get_field('instagram_url');
                ?>
                
                <!-- LinkedIn -->
                <?php if ($linkedin_url): ?>
                    <a href="<?php echo esc_url($linkedin_url); ?>" target="_blank" class="social-link linkedin mx-2">
                        <i class="bi bi-linkedin text-white"></i> 
                    </a>
                <?php endif; ?>

                <!-- Facebook -->
                <?php if ($facebook_url): ?>
                    <a href="<?php echo esc_url($facebook_url); ?>" target="_blank" class="social-link facebook mx-2">
                        <i class="bi bi-facebook text-white"></i> 
                    </a>
                <?php endif; ?>

                <!-- Instagram -->
                <?php if ($instagram_url): ?>
                    <a href="<?php echo esc_url($instagram_url); ?>" target="_blank" class="social-link instagram mx-2">
                        <i class="bi bi-instagram text-white"></i> 
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>

<div class="greenbox"></div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const scrollElements = document.querySelectorAll('.scroll-fade-in, .scroll-fade-out, .greenbox');

        function checkVisibility() {
            const windowHeight = window.innerHeight;
            scrollElements.forEach((element) => {
                const rect = element.getBoundingClientRect();
                const isVisible = rect.top <= windowHeight && rect.bottom >= 0;

                if (isVisible) {
                    element.classList.add('visible');
                    element.classList.remove('invisible');
                } else {
                    element.classList.add('invisible');
                    element.classList.remove('visible');
                }
            });
        }

        checkVisibility();

        window.addEventListener('scroll', checkVisibility);
        window.addEventListener('resize', checkVisibility);
    });
</script>

<?php get_footer(); ?>