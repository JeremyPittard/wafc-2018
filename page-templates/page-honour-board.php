<?php
/**
 * Template Name: Honour Board
 */

        get_header();
 ?>
 
<?php 
    if ( have_rows('achievement')) : 

        while (have_rows('achievement')) : the_row(); ?>
        
        <h2><?php echo get_sub_field('title') ?></h2>

         <?php   if ( have_rows('player')) : 

            while (have_rows('player')) : the_row(); ?>
            <p><?php echo get_sub_field('season'); ?> <?php echo get_sub_field('player_name'); ?> </p>

<?php   endwhile;
    endif;
endwhile;
endif;
get_footer();
    ?>

