<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>
    <?php wp_head(); ?>
</head>
<body>

<!-- Navbar Section Starts Here -->
<section class="navbar">
    <div class="container">
        <div class="logo">
        <?php 
        $logo = get_field('logo', 29);
        if( !empty( $logo ) ): ?>
            <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" class="img-responsive"/>
        <?php endif; ?>
        </div>


        <div class="menu text-right">
            <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
        </div> 

        <div class="clearfix"></div>
    </div>
</section>
