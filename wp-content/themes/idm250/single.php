<?php get_header(); ?>
<main>
<?php while (have_posts()) : the_post(); ?>
<div class="">
<div class="workshero">
        <h1 class=""><?php the_title(); ?></h1>
    </div>

    <div class="portfoliocontent">
        <div class="contentwidth">
        <?php the_content(); ?>
        </div>
    </div>
</div>
<?php endwhile; ?>

</main>
<?php get_footer();