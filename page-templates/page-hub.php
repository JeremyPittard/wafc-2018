<?php
/**
 * Template Name: Player Hub
 */
 get_header();
?>
 
 <div class="player-hub" id="top">
   <div class="container">
       <div class="row">
           <h2 class="col-xs-12">Useful Documents</h2>
           
           <?php if ( have_rows('documents') ) :            
                while( have_rows('documents') ) : the_row(); 
                $document = get_sub_field('document')['url'];
                $title = get_sub_field('document_title');
               ?>

                <div class="col-xs-12 col-md-3 player-hub__document">
                <a href="<?php echo $document; ?>" target="_blank">
                <?php echo file_get_contents( get_stylesheet_directory_uri() . '/img/icons/docs.svg' ); ?><br />
                <?php echo $title; ?>
            </a>
                </div>

           
               <?php endwhile; ?>
           
           <?php endif; ?>
           

       </div>
   </div>
</div>
<?php get_footer();
    