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
    <div class="hometext">
        <a href="http://molynatep.com/IDM250/petes-little-lunch-box/" target="_blank">
            <div class= "projgrid foodtruck">
                <div class="zodiac">
                    <picture>
                        <img class="proj" src="https://molynatep.com/IDM250/wp-content/themes/idm250/dist/img/lunchboxhero.png">
                    </picture>
                </div>
                <div class="projdesc">
                    <h3 class="projtitle">FOOD TRUCK APP</h3>
                    <p class="ita">UX/UI Design</p>
                    <p class="projinfo">Created a high-fidelity app prototype based on user research.</p>
                </div>
                </div>
                </a>
        <a href="https://molynatep.com/idm231-mpt54/" target="_blank">
            <div class= "projgrid">
                <div class="zodiac">
                    <picture>
                        <img class="proj" src=" https://molynatep.com/IDM250/wp-content/themes/idm250/dist/img/zodiac.png">
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



<?php get_footer();