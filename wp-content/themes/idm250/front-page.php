<?php get_header(); ?>

<main>
        <div class="intro">
            <div>
            <h1 class="introtext">
            <span class="highlight">HI, I'M MOLYNA</span></h1>
            <h1>AN ARTIST AND UX/UI DESIGNER</h1>
            <h1>BASED IN PHILADELPHIA, PA.</h1>
        </div>
        </div>
        <div class="work">
            <h2>SEE MY WORK</h2>
        </div>
        <div class="line">
            <svg height="50" width="4">
                <line x1="0" x2="0" y1="0" y2="80"/>
              </svg>
        </div>
        <div class="hometext">
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
<a href="http://molynatep.com/IDM250/portfolio-listing/"><h2 class="all">VIEW ALL ></h2></a>
</main>

<?php get_footer();
