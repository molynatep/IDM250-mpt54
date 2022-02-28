<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?> </title>
    <?php
    wp_head();
    ?>
</head>
<body <?php body_class();?>>
<a id="top"></a>
<header>
        <nav>
            <a href="https://molynatep.com/IDM250/"><img class="logo" src="https://molynatep.com/IDM250/wp-content/themes/idm250/dist/img/logo.svg" alt="logo"></a>
            <?php
wp_nav_menu(['theme_location' => 'primary_menu']); 
/*get_template_part('search-form');*/
?>
        </nav>
    </header>
    