<?php get_header(); ?>

<main>
  <div class="relative bg-white py-5 py-lg-7 px-4 px-lg-5">
    <!-- Section Heading -->
    <div class="text-center mx-auto mb-4">
      <h2 class="header fw-bold"><?php echo esc_html(get_field('pricing_section_heading')); ?></h2>
      <p class="h1 fw-bold text-dark"><?php echo esc_html(get_field('pricing_section_subheading')); ?></p>
      <p class="text-secondary fs-5"><?php echo esc_html(get_field('pricing_section_description')); 
              $beginner_btn = get_field('beginner_plan_button:link');?></p>
      
    </div>

    <!-- Pricing Cards -->
    <div class="row justify-content-center mt-5 g-4">
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
        <a href="<?php echo esc_url(get_field('enterprise_plan_button_link')); ?>" 
            class="btn btn-outline-primary mt-4 w-100">
            <?php echo esc_html(get_field('ovet_plan_button_text')); ?></a>
          </div>
        </div>
      </div>

      <!-- Enterprise Plan -->
      <div class="col-lg-4">
        <div class="card bg-dark text-white h-100 shadow-lg">
          <div class="card-body">
            <h3 class="header2"><?php echo esc_html(get_field('ovet_plan_name')); ?></h3>
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
            <a href="<?php echo esc_url(get_field('enterprise_plan_button_link')); ?>" 
            class="btn btn-primary mt-4 w-100">
            <?php echo esc_html(get_field('ovet_plan_button_text')); ?></a>
          </div>
        </div>
      </div>

      <!-- Elite Plan (Optional, if applicable) -->
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
           <a href="<?php echo esc_url(get_field('enterprise_plan_button_link')); ?>" 
            class="btn btn-outline-primary mt-4 w-100">
            <?php echo esc_html(get_field('ovet_plan_button_text')); ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>