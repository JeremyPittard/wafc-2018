<?php
/**
 * Template Name: standard content
 */
 get_header();
?>
 
 <div class="content" id="top">
     <div class="container">
         <div class="row">
             <h2 class="col-xs-12"><?php echo get_the_title(); ?></h2>
             <div class="col-xs-12">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                    the_content();
                    endwhile; 
                endif; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer();
    