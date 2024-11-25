
<?php get_header(); ?>
<main class="fpcontainer container-adaptive viewport-adaptive">

    <!-- Hero Section -->
    <?php 
    // Fetch hero section fields
    $hero_img = get_field('front_page_hero_image');
    $hero_text = get_field('front_page_hero_text') ?: 'Default Hero Text';
    $hero_subtitle = get_field('front_page_hero_subtitle') ?: 'Default Hero Subtitle';
    $hero_btn = get_field('front_page_hero_btn');
    ?>

    <section class="hero-section text-center" role="banner" style="background-image: url('<?php echo esc_url($hero_img['url']); ?>');">
        <div class="hero-content">
            <h1 class="hero-title"><?php echo esc_html($hero_text); ?></h1>
            <p class="hero-subtitle"><?php echo esc_html($hero_subtitle); ?></p>
            <?php if ($hero_btn): ?>
                <a href="<?php echo esc_url($hero_btn['url']); ?>" class="btn cta-button">
                    <?php echo esc_html($hero_btn['title']); ?>
                </a>
            <?php endif; ?>
        </div>
    </section>

    <?php 
    // Divider Image
    $divider_image = get_field('divider_image');
    if ($divider_image): ?>
        <img src="<?php echo esc_url($divider_image['url']); ?>" class="divider" alt="Section Divider">
    <?php endif; ?>

    <!-- Product Selection Section -->
    <div class="products scroll-fade-in scroll-fade-out">
        <div class="text-center">
            <h2 class="text-white m-5">
                <?php echo esc_html(get_field('product_intro_titel') ?: 'Our Plans'); ?>
                <hr>
            </h2>
            <p><?php the_field('product_intro_text'); ?></p>
        </div>

        <div class="row justify-content-center m-2">
            <?php 
            // Product Sections Array
            $products = [
                'beginner' => 'Beginner',
                'medium' => 'Medium',
                'prof' => 'Professional',
            ];

            foreach ($products as $key => $label): 
                $image = get_field("{$key}_image");
                $title = get_field("{$key}_titel") ?: $label;
                $summary = get_field("{$key}_summary") ?: "Summary for $label section.";
                $btn = get_field("{$key}_btn");
            ?>
            <section class="col-md-4 mb-4 product-card scroll-fade-in scroll-fade-out">
                <div class="card">
                    <?php if ($image): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" class="img-fluid lazy" alt="<?php echo esc_attr($title); ?>" loading="lazy">
                    <?php endif; ?>
                    <div class="card-body">
                        <h2 class="text-start"><?php echo esc_html($title); ?></h2>
                        <p class="text-start"><?php echo esc_html($summary); ?></p>
                        <?php if ($btn): ?>
                            <a href="<?php echo esc_url($btn['url']); ?>" class="btn btn-bordered">
                                <?php echo esc_html($btn['title']); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            <?php endforeach; ?>
        </div>
    </div>

    <?php 
    // Second Divider
    if ($divider_image): ?>
        <img src="<?php echo esc_url($divider_image['url']); ?>" class="divider divider2 scroll-fade-in scroll-fade-out" alt="Section Divider">
    <?php endif; ?>

    <!-- Testimonials Section -->
    <section class="testimonials-section scroll-fade-in scroll-fade-out text-start bg-light">
        <h2 class="text-center">
            Testimonials
            <hr class="my-4">
        </h2>
        <div id="testimonialsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
            <div class="carousel-inner">
                <?php for ($i = 1; $i <= 3; $i++): 
                    $testimonial_name = get_field("testimonial_name_$i") ?: "Client $i";
                    $testimonial_text = get_field("testimonial_text_$i") ?: "This is testimonial $i.";
                ?>
                <div class="carousel-item <?php echo $i === 1 ? 'active' : ''; ?>">
                    <blockquote class="blockquote">
                        <p class="mb-0"><?php echo esc_html($testimonial_text); ?></p>
                        <end class="blockquote-footer"><?php echo esc_html($testimonial_name); ?></end>
                    </blockquote>
                </div>
                <?php endfor; ?>
            </div>
            <div class="carousel-indicators mt-5">
                <?php for ($i = 0; $i < 3; $i++): ?>
                    <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="<?php echo $i; ?>" class="<?php echo $i === 0 ? 'active' : ''; ?>" aria-label="Slide <?php echo $i + 1; ?>"></button>
                <?php endfor; ?>
            </div>
        </div>
    </section>
   <?php 
    // Fetch the hero image, main text, subtitle, and button
    $coaching_titel = get_field('coaching_titel'); // Hero image
    $coaching_1 = get_field('coaching_1') ?: 'Default Hero Text'; // Main title
        $coaching_2 = get_field('coaching_2') ?: 'Default Hero Text'; // Main title
           $coaching_3 = get_field('coaching_3') ?: 'Default Hero Text'; // Main title
    $coaching_description = get_field('coaching_description') ?: 'Default Hero Subtitle'; // Subtitle text
    $quote = get_field('quote');
    ?>

<h2 class="coaching-style text-center scroll-fade-in scroll-fade-out">
   <?php echo esc_html($coaching_titel); ?>
    <hr class="my-4">
</h2>

<!-- Coaching Style Section -->
<section class="coaching-style-section scroll-fade-in scroll-fade-out">
    <div class="container-coaching">
        <h2 class="coaching-style-title text-2xl font-semibold mb-4">Quote</h2>
        <h3 class="coaching-style-description text-xl italic text-gray-700 mb-6">
            <?php echo esc_html($coaching_description); ?>
        </h3>
        <p class="coaching-description text-lg text-gray-600">
           <?php echo esc_html($quote); ?>
        </p>
    </div>
</section>

<!-- Aims List with Icons -->
<section class="aims scroll-fade-in scroll-fade-out py-16 bg-gray-50 text-center">
    <div class="container-aims">
        <div class="row row-aims justify-content-center">
            <!-- Aim One -->
            <div class="col-md-4 aim mb-8 mb-md-0">
                <div class="aim-content justify-content-center text-center">
                    <i class="bi bi-water aim-icon text-3xl text-indigo-600 mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-900">Core</h3>
                    <p class="text-lg text-gray-600">
                        <?php echo esc_html($coaching_1); ?>
                    </p>
                </div>
            </div>
            <!-- Aim Two -->
            <div class="col-md-4 aim mb-8 mb-md-0">
                <div class="aim-content justify-content-center text-center">
                    <i class="bi bi-water aim-icon text-3xl text-indigo-600 mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-900">Core</h3>
                    <p class="text-lg text-gray-600">
                        <?php echo esc_html($coaching_2); ?>
                    </p>
                </div>
            </div>
            <!-- Aim Three -->
            <div class="col-md-4 aim mb-8 mb-md-0">
                <div class="aim-content justify-content-center text-center">
                    <i class="bi bi-water aim-icon text-3xl text-indigo-600 mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-900">Core</h3>
                    <p class="text-lg text-gray-600">
                        <?php echo esc_html($coaching_3); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<br> <br> <br> 

<!-- About Section -->


<div class="width-container">

  <section class="aboutsection scroll-fade-in scroll-fade-out my-5">
    <h2 class="more-section mb-4 text-center"><?php the_field('more_titel'); ?><hr></h2>

    <div class="row">
        <!-- Swimming Career Section -->
        <div class="col-md-6 mb-4">
            <div class="info-box">
                <h2 class="swimming-title text-xl font-semibold"><?php the_field('swimming_career_title'); ?></h2>
                <p class="about-description"><?php the_field('swimming_career_description'); ?></p>
                <button type="button" class="btn-circle" data-bs-toggle="modal" data-bs-target="#swimmingCareerModal">
                    <i class="bi bi-plus-lg"></i>
                </button>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="info-box">
                <h2 class="career-title text-xl font-semibold"><?php the_field('coaching_career_title'); ?></h2>
                <p class="about-description"><?php the_field('coaching_career_description'); ?></p>
                <button type="button" class="btn-circle" data-bs-toggle="modal" data-bs-target="#coachingCareerModal">
                    <i class="bi bi-plus-lg"></i>
                </button>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="info-box">
                <h2 class="about-title text-xl font-semibold"><?php the_field('more_info_1_title'); ?></h2>
                <p class="about-description"><?php the_field('more_info_1_description'); ?></p>
                <button type="button" class="btn-circle" data-bs-toggle="modal" data-bs-target="#moreInfoModal1">
                    <i class="bi bi-plus-lg"></i>
                </button>
            </div>
        </div>

        <!-- More Info Section 2 -->
        <div class="col-md-6 mb-4">
            <div class="info-box">
                <h2 class="about-title text-xl font-semibold"><?php the_field('more_info_2_title'); ?></h2>
                <p class="about-description"><?php the_field('more_info_2_description'); ?></p>
                <button type="button" class="btn-circle" data-bs-toggle="modal" data-bs-target="#moreInfoModal2">
                    <i class="bi bi-plus-lg"></i>
                </button>
            </div>
        </div>
    </div>
  </section>

  <!-- Modals -->
  <!-- Swimming Career Modal -->
  <div class="modal fade" id="swimmingCareerModal" tabindex="-1" aria-labelledby="swimmingCareerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="swimmingCareerModalLabel">Swimming Career</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="<?php echo esc_url(get_field('swimming_career_image')['url']); ?>" alt="Swimming Career Image" class="img-fluid mb-3">
          <p><?php the_field('swimming_career_description_modal'); ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Coaching Career Modal -->
  <div class="modal fade" id="coachingCareerModal" tabindex="-1" aria-labelledby="coachingCareerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="coachingCareerModalLabel">Coaching Career</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <?php 
          $coaching_image = get_field('coaching_career_image');
          if ($coaching_image) : ?>
            <img src="<?php echo esc_url($coaching_image['url']); ?>" alt="Coaching Career Image" class="img-fluid mb-3">
          <?php endif; ?>
          <p><?php the_field('coaching_career_description_modal'); ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- More Info 1 Modal -->
  <div class="modal fade" id="moreInfoModal1" tabindex="-1" aria-labelledby="moreInfoModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="moreInfoModal1Label">More Info 1</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <?php 
          $more_info_1_image = get_field('more_info_1_image');
          if ($more_info_1_image) : ?>
            <img src="<?php echo esc_url($more_info_1_image['url']); ?>" alt="More Info 1 Image" class="img-fluid mb-3">
          <?php endif; ?>
          <p><?php the_field('more_info_1_description_modal'); ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- More Info 2 Modal -->
  <div class="modal fade" id="moreInfoModal2" tabindex="-1" aria-labelledby="moreInfoModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="moreInfoModal2Label">More Info 2</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <?php 
          $more_info_2_image = get_field('more_info_2_image');
          if ($more_info_2_image) : ?>
            <img src="<?php echo esc_url($more_info_2_image['url']); ?>" alt="More Info 2 Image" class="img-fluid mb-3">
          <?php endif; ?>
          <p><?php the_field('more_info_2_description_modal'); ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

        </div> <!-- .row -->
    </div> <!-- .product-selection -->

</main>
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
</div>
</div>
<?php get_footer(); ?>
