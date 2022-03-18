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
<div class="portfoliocontent">
        <div class="contentwidth">
        <?php the_content(); ?>
        </div>
    </div>
</div>
<?php endwhile; ?>
</main>

<?php get_footer();