<?php 
    $sponsor_logo = get_field('logo', 16);
?>

<section class="home-sponsors">
    <div class="container">
        <div class="row">
            <div class="col-xs-12"><h3 class="home-sponsors__heading">Major Supporters</h3></div>
        </div>
        <div class="row home-sponsors__container">
                <?php 
                if ( have_rows('sponsor', 16) ) :                 
                     while( have_rows('sponsor', 16) ) : the_row(); 
                        $sponsor_logo = get_sub_field('logo');
                        $sponsor_name = get_sub_field('name');
                        $link = get_sub_field('website');
                        $is_major_sponsor = get_sub_field('major_sponsor');
                        $enlarge_logo = get_sub_field('enlarge_logo');

                        if ($is_major_sponsor) : ?>
                        <figure class="col-xs-4 home-sponsors__sponsor">
                        <a href="<?php echo $link['url']; ?>" target="_blank">
                            <img class="home-sponsors__logo <?php if($enlarge_logo) : echo 'home-sponsors__logo--large'; endif; ?>" src="<?php echo $sponsor_logo['url']; ?>" alt="<?php echo $sponsor_logo['alt']; ?>">
                        </a>    
                        </figure>                        
                
                        <?php endif;
                    endwhile; 
                endif; ?>
        </div>
    </div>
</section>
<?php wp_reset_query(); ?>