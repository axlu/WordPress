<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">

<!-- TITLE -->
<title><?php bloginfo('name'); ?></title>


<meta name="description" content="<?php bloginfo('description'); ?>">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

<!--Css -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge"><?php wp_head(); ?>

<body>

        <div class="container">
        
        <div class="wrapper">  
        <div class="padding">
        <div class="col-12">
                            <input id="toggle-menu" type="checkbox" />
                            <label for="toggle-menu" class="menu-on" id="equal">=</label>
                            
                            <nav class="menu">
                            <?php wp_nav_menu(array('theme_location' => 'nav')); ?>       
                            </nav>
                            
                            
        </div>
        </div>
        </div>

        <div class="row"></div>
        <div class="row"></div>
        <div class="wrapper">
        <section>
            
                <div class="col-12">
                    <div class="headings">
                    <?php the_custom_logo(); ?>
                    </div>
                </div>
            
        </section>
        
        </div>