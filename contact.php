<?php 
    /**
     * Template Name: Contact
     * 
     * 
     * @package TheSetup-Practice01
     * 
     * 
    */
?>

<?php get_header(); ?>

    <!-- Code Goes Here -->
    <?php
/**
 * Template Name: Home Page
 *
 * @package Block-Patterns
 *
 */
?>
<?php get_header(); ?>

<div class="home-page">

    <?php

        while ( have_posts() ) :
            the_post();
            
            get_template_part( 'template-parts/content', 'page' );
            
            
        endwhile; // End of the loop.
    ?>
    
</div>

<?php get_footer(); ?>
