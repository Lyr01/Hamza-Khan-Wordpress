<?php get_header(); ?>
<!-- Categories Section Starts Here -->
<section class="categories">
    <div class="container">
        <h2 class="text-center"><?php the_field('title'); ?></h2>
        <?php
        // Check rows exists.
        if( have_rows('foodmenu', 29) ):

            // Loop through rows.
            while( have_rows('foodmenu', 29) ) : the_row();

                // Load sub field value.
                $category_name = get_sub_field('category_name');
                $category_image = get_sub_field('category_image')
                ?>
                <a href="<?php echo strtolower($category_name); ?>">
                <div class="box-3 float-container">
                    <img src="<?php echo esc_url($category_image['url']); ?>" alt="<?php echo esc_attr($category_image['alt']); ?>" class="img-responsive img-curve">

                    <h3 class="float-text text-white"><?php echo $category_name?></h3>
                </div>
                </a>                   
                <?php
            // End loop.
            endwhile;
        endif;
        ?>
        <div class="clearfix"></div>
    </div>
</section>
    
<?php get_footer(); ?>