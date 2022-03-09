<?php
/*
Template Name: Portfolio Listing
*/
?>

<?php get_header(); ?>

<main>
<div class="workshero">
<h1 class=""><?php the_title(); ?></h1>
</div>
        <?php
$featured_posts = get_field('featured_posts');
if( $featured_posts ): ?>
    <ul>
    <?php foreach( $featured_posts as $post ): 

// Setup this post for WP functions (variable must be named $post).
setup_postdata($post); ?>
<?php get_template_part('components/project-teaser'); ?>
    <?php endforeach; ?>
    </ul>
    <?php 
    // Reset the global post object so that the rest of the page works correctly.
    wp_reset_postdata(); ?>
<?php endif; ?>
</div>
</main>

<?php get_footer();