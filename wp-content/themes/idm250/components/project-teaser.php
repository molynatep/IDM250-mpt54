      <?php
    // Has to be done in the loop so we have access to the featured image ID
    $featured_image = idm_get_asset_by_id(get_post_thumbnail_id());
    // Image doesn't exist, lets add a placeholder image to force user to upload an image.
    if (!$featured_image) {
        $featured_image['alt'] = 'Missing Image';
        $featured_image['src'] = '//via.placeholder.com/1058x705';
    };

    // Get project categories from this post ID
    $project_categories = get_the_terms(get_the_ID(), 'idm-project-categories');
?>
<a class="nolinkstyle" href="<?php the_permalink(); ?>">
    <div class="projgrid foodtruck">
        <div class="zodiac">
            <picture>
            <img class="proj"
                src="<?php echo $featured_image['src']; ?>"
                alt="<?php echo $featured_image['alt']; ?>">     
        </picture>
            </div>
    <div class="projdesc">
            <h3 class="projtitle"><?php the_field('project_title');?></h3>
            <p class="ita"><?php the_field( 'project_type' ); ?></p>
            <p class="projinfo"><?php the_field( 'project_description' ); ?></p>
            </div>
            </div>
</a>