<?php get_header(); ?>
<main>
<?php while (have_posts()) : the_post(); ?>
<div class="">
<div class="workshero">
        <h1 class=""><?php the_title(); ?> 
        </h1>
        <?php
    // Get project categories from this post ID
    $project_categories = get_the_terms(get_the_ID(), 'idm-project-categories');
if ($project_categories) {
    // Get total items count
    $total = count($project_categories) - 1;
    // Loop through this post's categories and spit them out
    foreach ($project_categories as $key => $category) {
        $category_link = get_term_link($category->term_id);
        echo "<span class='project-teaser__tag'><a href='$category_link'>$category->name</a></span>";
        // Add comma after every loop. Let's not add it to the last item in the loop
        if ($key != $total) {
            echo ', ';
            }
        }
    }
    ?>
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