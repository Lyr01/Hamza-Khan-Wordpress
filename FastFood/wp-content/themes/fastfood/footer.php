<?php wp_footer(); ?>

<!-- social Section Starts Here -->
<section class="social">
    <div class="container text-center">
        <ul>
        <?php
        if( have_rows('socialmedia', 29) ):
            while( have_rows('socialmedia', 29) ) : the_row();
                $social_image = get_sub_field('social_image');
                $social_link = get_sub_field('social_link');
            ?>
                    <li>
                        <a href="<?php echo $social_link['url'] ?>"><img class="social" src="<?php echo esc_url($social_image['url']); ?>" alt="<?php echo esc_attr($social_image['alt']); ?>"> </a>
                    </li>
                
            <?php

            endwhile;
        endif
        ?>
        </ul>
    </div>
</section>


<!-- footer Section Starts Here -->
<section class="footer">
    <div class="container text-center">
        <p>Check The Social Media</p>
    </div>
</section>

</body>
</html>