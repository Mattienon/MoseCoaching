<?php
/* Template Name: Page Priser */
get_header();
?>
    <!-- Hero Section -->
    <?php 
    // Fetch hero section fields
    $hero_img = get_field('front_page_hero_image');
    $hero_btn = get_field('front_page_hero_btn');
    ?>

    <section class="hero-section text-center" role="banner" style="background-image: url('<?php echo esc_url($hero_img['url']); ?>');">
        <div class="hero-content">
  <div class="relative bg-white py-5 py-lg-7 px-4 px-lg-5">
    <!-- Section Heading -->
    <div class="text-center mx-auto mb-4">
      <h2 class="header fw-bold"><?php echo esc_html(get_field('pricing_section_heading')); ?></h2>
      <p class="h1 fw-bold text-dark"><?php echo esc_html(get_field('pricing_section_subheading')); ?></p>
      <p class="text-secondary fs-5"><?php echo esc_html(get_field('pricing_section_description')); ?></p>
    </div>
            <?php if ($hero_btn): ?>
                <a href="<?php echo esc_url($hero_btn['url']); ?>" class="btn cta-button">
                    <?php echo esc_html($hero_btn['title']); ?>
                </a>
            <?php endif; ?>
        </div>
    </section>
<main>

    <!-- Pricing Cards -->
    <div class="row justify-content-center mt-5 g-4 p-5">
        <h2 class="text-center">
    <?php echo esc_html(get_field('products_overview_title')); ?>
    <hr class="my-4">
</h2>
      <!-- Hobby Plan -->
      <div class="col-lg-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h3 class="header"><?php echo esc_html(get_field('beginner_plan_name')); ?></h3>
            <p class="h1 fw-bold"><?php echo esc_html(get_field('beginner_plan_price')); ?> <span class="fs-6 text-muted">/hour</span></p>
            <p class="text-muted"><?php echo esc_html(get_field('beginner_plan_description')); ?></p>
            <ul class="list-unstyled mt-4">
              <li class="d-flex align-items-center">
                <i class="bi bi-check-lg text-success me-2"></i> <?php echo esc_html(get_field('beginner_plan_product_count')); ?>
              </li>
              <li class="d-flex align-items-center">
                <i class="bi bi-check-lg text-success me-2"></i> <?php echo esc_html(get_field('beginner_plan_subscriber_count')); ?>
              </li>
              <li class="d-flex align-items-center">
                <i class="bi bi-check-lg text-success me-2"></i> <?php echo esc_html(get_field('beginner_plan_analytics')); ?>
              </li>
              <li class="d-flex align-items-center">
                <i class="bi bi-check-lg text-success me-2"></i> <?php echo esc_html(get_field('beginner_plan_support')); ?>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Enterprise Plan -->
      <div class="col-lg-4">
        <div class="card bg-dark text-white h-100 shadow-lg">
          <div class="card-body">
            <h3 class="header2 text-white"><?php echo esc_html(get_field('ovet_plan_name')); ?></h3>
            <p class="h1 fw-bold"><?php echo esc_html(get_field('ovet_plan_price')); ?> <span class="fs-6 text-muted">/hour</span></p>
            <p class="text-secondary"><?php echo esc_html(get_field('ovet_plan_description')); ?></p>
            <ul class="list-unstyled mt-4">
              <li class="d-flex align-items-center">
                <i class="bi bi-check-lg text-primary me-2"></i> <?php echo esc_html(get_field('ovet_plan_product_count')); ?>
              </li>
              <li class="d-flex align-items-center">
                <i class="bi bi-check-lg text-primary me-2"></i> <?php echo esc_html(get_field('ovet_plan_subscriber_count')); ?>
              </li>
              <li class="d-flex align-items-center">
                <i class="bi bi-check-lg text-primary me-2"></i> <?php echo esc_html(get_field('ovet_plan_analytics')); ?>
              </li>
              <li class="d-flex align-items-center">
                <i class="bi bi-check-lg text-primary me-2"></i> <?php echo esc_html(get_field('ovet_plan_support')); ?>
              </li>
              <li class="d-flex align-items-center">
                <i class="bi bi-check-lg text-primary me-2"></i> <?php echo esc_html(get_field('ovet_plan_marketing')); ?>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Elite Plan -->
      <div class="col-lg-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h3 class="header"><?php echo esc_html(get_field('elite_plan_name')); ?></h3>
            <p class="h1 fw-bold"><?php echo esc_html(get_field('elite_plan_price')); ?> <span class="fs-6 text-muted">/hour</span></p>
            <p class="text-muted"><?php echo esc_html(get_field('elite_plan_description')); ?></p>
            <ul class="list-unstyled mt-4">
              <li class="d-flex align-items-center">
                <i class="bi bi-check-lg text-success me-2"></i> <?php echo esc_html(get_field('elite_plan_product_count')); ?>
              </li>
              <li class="d-flex align-items-center">
                <i class="bi bi-check-lg text-success me-2"></i> <?php echo esc_html(get_field('elite_plan_subscriber_count')); ?>
              </li>
              <li class="d-flex align-items-center">
                <i class="bi bi-check-lg text-success me-2"></i> <?php echo esc_html(get_field('elite_plan_analytics')); ?>
              </li>
              <li class="d-flex align-items-center">
                <i class="bi bi-check-lg text-success me-2"></i> <?php echo esc_html(get_field('elite_plan_support')); ?>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>



<?php get_footer(); ?>