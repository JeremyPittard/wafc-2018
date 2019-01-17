<?php
/**
 * Template Name: Honour Board
 */

        get_header();
        $board_count = 1;
 ?>
 <section class="honor-board__links">
   <div class="container">
       <div class="row">
            <?php
                if (have_rows('achievement')) : 
                    while (have_rows('achievement')) : the_row(); 
                    $title = get_sub_field('title');
                    $title_id = strtolower(trim(preg_replace('/\s+/', '', $title)));
                    ?>
                        <a href="#<?php echo $title_id; ?>" class="honor-board__link col-xs-12 col-md-4"><?php echo $title; ?></a>
            <?php
            endwhile;
        endif; ?>
       </div>
   </div>  
</section>

        <?php 
        if ( have_rows('achievement')) : 
            
            while (have_rows('achievement')) : the_row(); 
            $title = get_sub_field('title');
            $title_id = strtolower(trim(preg_replace('/\s+/', '', $title)));
            ?>
                <section class="honor-board <?php if($board_count % 2 === 0) : echo 'alternate'; endif; ?>" id="<?php echo $title_id?>"> 
                    <div class="container"> 
                        <div class="row">
                            <h2 class="col-xs-12 honor-board__title" id="<?php echo $title_id; ?>"><?php echo $title ?></h2>
                        </div> 
                        <?php   if ( have_rows('player')) : 
                             while (have_rows('player')) : the_row(); ?>
                                <div class="row">
                                    <h4><?php echo get_sub_field('season'); ?> <?php echo get_sub_field('player_name'); ?> </h4>
                                </div>
                            <?php endwhile;
                        endif; ?>
                    </div>
                </section>
<?php 
            endwhile;
        endif;

get_footer();
    ?>