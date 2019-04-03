<?php 
    $sponsor_logo = get_field('logo', 16);
    $delay = 0;
?>

<section class="home-sponsors">
    <div class="container">
        <div class="row">
            <div class="col-xs-12"><h3 class="home-sponsors__heading" data-aos="fade-up">Our Supporters</h3></div>
        </div>
        <div class="row home-sponsors__container">
                <?php 
                if ( have_rows('sponsor', 16) ) :                 
                     while( have_rows('sponsor', 16) ) : the_row(); 
                        $sponsor_logo = get_sub_field('logo');
                        $sponsor_name = get_sub_field('name');
                        $link = get_sub_field('website');
                        $enlarge_logo = get_sub_field('enlarge_logo');
                        $background = get_sub_field('white_bg');
                        $alt_logo = get_sub_field('alt_logo');
                        ?>

                        <figure class="col-xs-4 home-sponsors__sponsor <?php if ($background) : echo 'white-bg'; endif; ?>" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
                        <a href="<?php if($link) : echo $link['url']; endif; ?>" target="_blank">
                        <?php 
                            if($alt_logo) : ?>
                                <img class="home-sponsors__logo <?php if($enlarge_logo) : echo 'home-sponsors__logo--large'; endif; ?>" src="<?php echo $alt_logo['url']; ?>" alt="<?php echo $sponsor_logo['alt']; ?>">
                            <?php else : ?>
                                <img class="home-sponsors__logo <?php if($enlarge_logo) : echo 'home-sponsors__logo--large'; endif; ?>" src="<?php echo $sponsor_logo['url']; ?>" alt="<?php echo $sponsor_logo['alt']; ?>">
                            <?php endif;?>
                        </a>    
                        </figure>

                    <?php
                    if ($delay < 400) {
                        $delay += 200;
                    } else {
                        $delay = 0;
                    }
                    endwhile; 
                endif; ?>
        </div>
    </div>
</section>
<?php wp_reset_query(); ?>