<?php get_header(); ?>

<main>
<div class="workshero">
<h1 class=""><?php the_archive_title(); ?></h1>
</div>
    <?php
    while (have_posts()) : the_post();
    get_template_part('components/project-teaser');
    endwhile;
    ?>
</div>
</main>

<?php get_footer();