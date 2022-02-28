<?php get_header(); ?>

<main>
        <div class="intro">
            <div>
            <h1 class="introtext">
            <span class="highlight">HI, I'M MOLYNA.</span></h1>
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
        <a href="https://molynatep.com/IDM250/petes-little-lunch-box/"  target="_blank">
            <div class= "projgrid foodtruck">
                <div class="zodiac">
                    <picture>
                        <img class="proj" src="wp-content/themes/idm250/dist/img/lunchboxhero.png">
                    </picture>
                </div>
                <div class="projdesc">
                    <h3 class="projtitle"><?php echo get_field('project_title', 129 );?></h3>
                    <p class="ita"><?php echo get_field('project_type', 129 );?></p>
                    <p class="projinfo"><?php echo get_field('project_description', 129 );?></p>
                </div>
                </div>
                </a>
        <a href="https://molynatep.com/idm231-mpt54/" target="_blank">
            <div class= "projgrid">
                <div class="zodiac">
                    <picture>
                        <img class="proj" src="wp-content/themes/idm250/dist/img/zodiac.png">
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
                            <img class="proj" src="wp-content/themes/idm250/dist/img/microinteractions.png">
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
<a href="http://molynatep.com/IDM250/portfolio-listing/"><h2 class="all">VIEW ALL ></h2></a>
</main>

<?php get_footer();
