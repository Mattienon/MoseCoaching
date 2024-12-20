<?php get_header(); ?>

<main>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="post-meta">
                    <span>Posted on <?php echo get_the_date(); ?></span> | 
                    <span>by <?php the_author(); ?></span>
                </div>
                <div class="post-content">
                    <?php the_excerpt(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>No posts found. Please add some posts to display content here.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>