<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?> - <?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
<div class="language-switcher">
    <div class="sos">
        <h2 class="sos-r1">Teknik<span class="sos-prep">i</span>fokus</h2>
    </div>
    <ul class="language-list list-inline justify-content-end mb-0">
        <?php
        pll_the_languages(array(
            'show_flags' => true,
            'show_names' => false,
            'hide_if_empty' => false,
            'display_names_as' => 'name',
        ));
        ?>
    </ul>
</div>

<nav class="navbar navbar-expand d-flex">
    <div class="container">
        <!-- Site Name -->
              <!-- Logo -->
        <?php 
            $logo = get_field('logo');
            ?>
        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
            <?php bloginfo('name'); ?>
        </a>
        <a href="<?php echo esc_url(home_url('/')); ?>">
                     <img src="<?php echo esc_url($logo['url']); ?>" alt="Logo" class="logo img" />
                </a>

        <!-- Navbar Menu -->
        <div class="navbar">
            
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => false,
                'menu_class' => 'navbar-nav ml-auto',
                'menu_id' => 'main-menu',
            ));
            ?>
        </div>
    </div>
</nav>
</header>

<?php wp_footer(); ?>
</body>
</html>
