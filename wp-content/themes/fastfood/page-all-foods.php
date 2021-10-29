<?php get_header(); ?>

    <!-- fOOD Search Section Starts Here -->
    <section class="food-search text-center">
        <h2 class="text-center"><?php the_field('title'); ?></h2>
        <div class="container">
            <form action="/?s=" method="POST">
                <input type="search" name="search" placeholder="Search..." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>


    <!-- fOOD Menu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <?php
            if( have_rows('foodmenu', 29) ):        

                while ( have_rows('foodmenu', 29) ) : the_row();

                    $category_name = get_sub_field('category_name');

                    if( have_rows('category') ):
                        while( have_rows('category') ) : the_row();
                            $image = get_sub_field('image');
                            $title = get_sub_field('title');
                            $price = get_sub_field('price');
                            $link = get_sub_field('link');
                            $fooddetail = get_sub_field('fooddetail');  
                            ?>
                            <div class="food-menu-box">
                                <div class="food-menu-img">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-responsive img-curve">
                                </div>
                
                                <div class="food-menu-desc">
                                    <h4><?php echo $title ?></h4>
                                    <p class="food-price">$<?php echo $price; ?></p>
                                    <p class="food-detail">
                                    <?php echo $fooddetail; ?>
                                    </p>
                                    </br>
                                    <p class="food-detail">
                                    <?php echo $category_name; ?>
                                    </p>
                                    <br>
                                    <?php if($link):?>
                                    <a href="<?php echo $link['url']; ?>" class="btn btn-primary">Order Now</a>
                                    <?php else:?>
                                    <a class="btn btn-primary">Out of order now</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php
                        endwhile;
                    endif;
                endwhile;
            endif;
            ?>        

            <div class="clearfix"></div>         

        </div>
    </section>

<?php get_footer(); ?>