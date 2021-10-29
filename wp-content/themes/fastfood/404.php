<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<!-- fOOD sEARCH Section Starts Here -->
<section class="food-search text-center">
    <div class="container">
        
        <h2 class="text-center">Error 404 PAGE NOT FOUND</h2>
        <div class="container">
        <form action="/?s=" method="POST">
            <input type="search" name="search" placeholder="Search..." required>
            <input type="submit" name="submit" value="Search" class="btn btn-primary">
        </form>

    </div>
</section>

<?php get_footer(); ?>