<footer class="text-center py-4">
    <!-- Footer Content -->
    <p>&copy; <?php echo date('Y'); ?> Swim Coach. All rights reserved.</p>

    <!-- Social Media Links -->
    <div class="social-media-links d-flex justify-content-center text-white">
        <?php 
        // Get the social media URLs from ACF
        $linkedin_url = get_field('linkedin_url');
        $facebook_url = get_field('facebook_url');
        $instagram_url = get_field('instagram_url');
        ?>

        <!-- LinkedIn -->
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
</footer>

<?php wp_footer(); ?>
</body>
</html>