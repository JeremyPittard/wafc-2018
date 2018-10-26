<?php
/**
 * Template Name: Fixtures
 */

    $intro = get_field('intro');
    get_header();
?>
 
 <h1><?php echo $intro ?></h1>


<?php 
    if ( have_rows('team')) :
        
        while (have_rows('team')) : the_row(); ?>

        <h2><?php echo get_sub_field('team_name') ?></h2>

            <?php if (have_rows('fixtures')) :

                while (have_rows('fixtures')) : the_row(); ?>
                
                <ul>
                    <li><?php echo get_sub_field('datetime'); ?></li>
                    <li><?php echo get_sub_field('opponent'); ?></li>
                    <li><?php echo get_sub_field('location'); ?></li>
                </ul>    

<?php   endwhile;
else ?> <h2> No upcoming Games Check back soon! </h2>


<?php
endif; 
endwhile;
endif;
    get_footer();
    ?>
    