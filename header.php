<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class("d-flex flex-column"); ?> >
	
    <?php wp_body_open(); ?>
    <header class=" d-flex flex-row flex-nowrap bg-danger">
    <?php
    if ( has_custom_logo() ) {
        the_custom_logo();
    }
    wp_nav_menu(array(
			'theme_location'  => 'menu-principal',
			'container'       => 'nav',
			'container_class' => 'navbar flex-fill',
			'menu_class'      => 'nav d-flex flex-row flex-nowrap justify-content-center flex-fill  p-5 ',
		));
        ?>
    </header>   

   