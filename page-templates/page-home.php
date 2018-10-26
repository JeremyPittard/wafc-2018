<?php
/**
 * Template Name: Home
 */
 get_header();
?>
 
 <div class="home" id="top">
    <?php 
    get_template_part('./partials/latest-news');
    get_template_part('./partials/about-us');
    get_template_part('./partials/upcoming-games');
    get_template_part('./partials/upcoming-events');
    get_template_part('./partials/home-sponsors');
    get_template_part('./partials/map');
     
    ?>
</div>
<?php get_footer();
    