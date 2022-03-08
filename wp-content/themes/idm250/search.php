<?php get_header(); ?>
<main>
    <div class="search">
        <!--<input class="searchbar" type="text" placeholder="SEARCH">-->
        <?php get_template_part('search-form');?>
    </div>
<?php
$args = [
    's' => @$_GET['s'],
    'post_type' => @$_GET['post_type'],
];
$search_query = new WP_Query($args)
?>

<?php
get_template_part(
    'components/searchheader',
    null,
    [
        'heading' => 'Viewing results for "' . $_GET['s'] . '"',
        'body' => ''
    ]
);
?>

<div class="container search-results">
  <?php
  if ($search_query->have_posts() && $_GET['s'] != '') {
      while ($search_query->have_posts()) : $search_query->the_post();
      get_template_part('components/project-teaser');
    endwhile;
    // After looping through a separate query, this function restores the $post global to the current post in the main query.
    wp_reset_postdata();
} else {
    // no results
    echo '<p class="noresults">SORRY, THERE ARE NO RESULTS. ☹️</p>';
}

?>
<?php get_footer();