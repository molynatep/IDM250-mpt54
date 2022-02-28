<?php
/* Template Name: Search */
?>
<?php get_header(); ?>
<main>
    <div class="search">
        <!--<input class="searchbar" type="text" placeholder="SEARCH">-->
        <?php get_template_part('search-form');?>

    </div>
    <?php
    
 $args = [
     's' => $_GET['s'],
     'post_type' => $_GET['post_type'],
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
  if ($search_query->have_posts()) {
      while ($search_query->have_posts()) : $search_query->the_post();
      get_template_part('components/project-teaser');
      endwhile;
      wp_reset_postdata();
  } else {
      // no results
      echo '<p>Sorry, there are no results</p>';
  }

?>
    <!--
    <div class="results">
    <p>Viewing 2 results for HTML</p>
    </div>
    <div class="lineresults">
    <svg version="1.1" id="line_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="5px" xml:space="preserve">
    <path class="path2" fill="#01a09e" stroke-width="3" stroke="#ACACBA" d="M0 0 l1120 0"/>
    </svg>
    </div>
    <div class="hometext">
    <a href="https://molynatep.com/idm231-mpt54/" target="_blank">
            <div class= "projgrid">
                <div class="zodiac">
                    <picture>
                        <img class="proj" src="https://molynatep.com/IDM250/wp-content/themes/idm250/dist/img/zodiac.png">
                    </picture>
                </div>
                <div class="projdesc">
                    <h3 class="projtitle">PLANT ZODIAC</h3>
                    <p class="ita">HTML, CSS, Javascript</p>
                    <p class="projinfo">Coded a plant zodiac desktop webpage using Javascript.(Desktop only)</p>
                </div>
                </div>
                </a>
            <a href="https://molynatep.com/idm241/final/casestudy/" target="_blank">
                <div class= "projgrid micro">
                    <div class="zodiac">
                        <picture>
                            <img class="proj" src="https://molynatep.com/IDM250/wp-content/themes/idm250/dist/img/microinteractions.png">
                        </picture>
                    </div>
                    <div class="projdesc">
                        <h3 class="projtitle microtitle">MICROINTERACTIONS</h3>
                        <p class="ita"> HTML, CSS, Javascript</p>
                        <p class="projinfo">Designed new microinteractions based off of the Yelp website.</p>
                    </div>
                    </div>
                    </a>
                </div>
</main>
</div>-->



<?php get_footer();